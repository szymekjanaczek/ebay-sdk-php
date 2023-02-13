<?php
namespace DTS\eBaySDK\Services;

use DTS\eBaySDK\Types\BaseType;
use GuzzleHttp\Promise\PromiseInterface;
use DTS\eBaySDK\Parser\JsonParser;
use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\UriResolver;
use \DTS\eBaySDK as Functions;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

/**
 * The base class for every eBay REST service class.
 */
abstract class BaseRestService
{
    /**
     * HTTP header constant. Describes the natural language provided in the field values of the request payload.
     */
    const HDR_REQUEST_LANGUAGE = 'Content-Language';

    /**
     * HTTP header constant. Tells the server the natural language in which the client desires the response.
     */
    const HDR_RESPONSE_LANGUAGE = 'Accept-Language';

    /**
     * HTTP header constant. Tells the server the encoding in which the client desires the response.
     */
    const HDR_RESPONSE_ENCODING = 'Accept-Encoding';

    /**
     * @var ConfigurationResolver Resolves configuration options.
     */
    private ConfigurationResolver $resolver;

    /**
     * @var UriResolver Resolves uri parameters.
     */
    private UriResolver $uriResolver;

    /**
     * @var array Associative array storing the current configuration option values.
     */
    private array $config;

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        $this->resolver = new ConfigurationResolver(static::getConfigDefinitions());
        $this->uriResolver = new UriResolver();
        $this->config = $this->resolver->resolve($config);
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array{compressResponse: array{valid: string[], default: false}, debug: array{valid: string[], fn: string, default: false}, httpHandler: array{valid: string[], default: string}, httpOptions: array{valid: string[], default: array{http_errors: false}}, requestLanguage: array{valid: string[]}, responseLanguage: array{valid: string[]}, sandbox: array{valid: string[], default: false}} An associative array of configuration definitions.
     */
    public static function getConfigDefinitions(): array
    {
        return [
            'compressResponse' => [
                'valid'   => ['bool'],
                'default' => false
            ],
            'debug' => [
                'valid'   => ['bool', 'array'],
                'fn'      => 'DTS\eBaySDK\applyDebug',
                'default' => false
            ],
            'httpHandler' => [
                'valid'   => ['callable'],
                'default' => 'DTS\eBaySDK\defaultHttpHandler'
            ],
            'httpOptions' => [
                'valid'   => ['array'],
                'default' => [
                    'http_errors' => false
                ]
            ],
            'requestLanguage' => [
                'valid' => ['string']
            ],
            'responseLanguage' => [
                'valid' => ['string']
            ],
            'sandbox' => [
                'valid'   => ['bool'],
                'default' => false
            ]
        ];
    }

    /**
     * Method to get the service's configuration.
     *
     * @param string|null $option The name of the option whos value will be returned.
     *
     * @return mixed Returns an associative array of configuration options if no parameters are passed,
     * otherwise returns the value for the specified configuration option.
     */
    public function getConfig($option = null)
    {
        return $option === null
            ? $this->config
            : (isset($this->config[$option])
                ? $this->config[$option]
                : null);
    }

    /**
     * Set multiple configuration options.
     *
     * @param array $configuration Associative array of configuration options and their values.
     */
    public function setConfig(array $configuration): void
    {
        $this->config = Functions\arrayMergeDeep(
            $this->config,
            $this->resolver->resolveOptions($configuration)
        );
    }

    /**
     * Sends an asynchronous API request.
     *
     * @param string $name The name of the operation.
     * @param BaseType|null $request Request object containing the request information.
     *
     * @return PromiseInterface A promise that will be resolved with an object created from the JSON response.
     */
    protected function callOperationAsync($name, BaseType $request = null)
    {
        $operation = static::$operations[$name];

        $paramValues = [];
        $requestValues = [];

        if ($request !== null) {
            $requestArray = $request->toArray();
            $paramValues = array_intersect_key($requestArray, $operation['params']);
            $requestValues = array_diff_key($requestArray, $operation['params']);
        }

        $url = $this->uriResolver->resolve(
            $this->getUrl(),
            $this->getConfig('apiVersion'),
            $operation['resource'],
            $operation['params'],
            $paramValues
        );
        $method = $operation['method'];
        $body = $this->buildRequestBody($requestValues);
        $headers = $this->buildRequestHeaders($body);
        $responseClass = $operation['responseClass'];
        $debug = $this->getConfig('debug');
        $httpHandler = $this->getConfig('httpHandler');
        $httpOptions = $this->getConfig('httpOptions');

        if ($debug !== false) {
            $this->debugRequest($url, $headers, $body);
        }

        $request = new Request($method, $url, $headers, $body);

        return $httpHandler($request, $httpOptions)->then(
            function (ResponseInterface $res) use ($debug, $responseClass): object {
                $json = $res->getBody()->getContents();

                if ($debug !== false) {
                    $this->debugResponse($json);
                }

                $response =  new $responseClass(
                    [],
                    $res->getStatusCode(),
                    $res->getHeaders()
                );

                JsonParser::parseAndAssignProperties($response, $json);

                return $response;
            }
        );
    }

    /**
     * Helper function to return the URL as determined by the sandbox configuration option.
     *
     * @return string Either the production or sandbox URL.
     */
    private function getUrl()
    {
        return $this->getConfig('sandbox') ? static::$endPoints['sandbox'] : static::$endPoints['production'];
    }

    /**
     * Builds the request body string.
     *
     * @param array $request Associative array that is the request body.
     *
     * @return string The request body in JSON format.
     */
    private function buildRequestBody(array $request)
    {
        return empty($request) ? '' : json_encode($request);
    }

    /**
     * Helper function that builds the HTTP request headers.
     *
     * @param string $body The request body.
     *
     * @return array An associative array of HTTP headers.
     */
    private function buildRequestHeaders(string $body)
    {
        $headers = $this->getEbayHeaders();

        $headers['Accept'] = 'application/json';
        $headers['Content-Type'] = 'application/json';
        $headers['Content-Length'] = strlen($body);

        // Add optional headers.
        if ($this->getConfig('requestLanguage')) {
            $headers[self::HDR_REQUEST_LANGUAGE] = $this->getConfig('requestLanguage');
        }

        if ($this->getConfig('responseLanguage')) {
            $headers[self::HDR_RESPONSE_LANGUAGE] = $this->getConfig('responseLanguage');
        }

        if ($this->getConfig('compressResponse')) {
            $headers[self::HDR_RESPONSE_ENCODING] = 'application/gzip';
        }

        return $headers;
    }

    /**
     * Derived classes must implement this method that will build the needed eBay http headers.
     *
     * @return array An associative array of eBay http headers.
     */
    abstract protected function getEbayHeaders();

    /**
     * Sends a debug string of the request details.
     *
     * @param string $url API endpoint.
     * @param array $headers Associative array of HTTP headers.
     * @param string $body The JSON body of the request.
      */
    private function debugRequest(string $url, array $headers, string $body): void
    {
        $str = $url.PHP_EOL;

        $str .= array_reduce(array_keys($headers), function ($str, $key) use ($headers): string {
            $str .= $key.': '.$headers[$key].PHP_EOL;
            return $str;
        }, '');

        $str .= $body;

        $this->debug($str);
    }

    /**
     * Sends a debug string of the response details.
     *
     * @param string $body The JSON body of the response.
      */
    private function debugResponse(string $body): void
    {
        $this->debug($body);
    }

    /**
     * Sends a debug string via the attach debugger.
     *
     * @param string $str The debug information.
     */
    private function debug(string $str): void
    {
        $debugger = $this->getConfig('debug');
        $debugger($str);
    }
}
