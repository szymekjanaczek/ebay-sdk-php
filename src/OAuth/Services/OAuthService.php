<?php
namespace DTS\eBaySDK\OAuth\Services;

use DTS\eBaySDK\Credentials\CredentialsInterface;
use InvalidArgumentException;
use DTS\eBaySDK\OAuth\Types\GetUserTokenRestRequest;
use DTS\eBaySDK\OAuth\Types\GetUserTokenRestResponse;
use GuzzleHttp\Promise\PromiseInterface;
use DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestRequest;
use DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestResponse;
use DTS\eBaySDK\OAuth\Types\GetAppTokenRestRequest;
use DTS\eBaySDK\OAuth\Types\GetAppTokenRestResponse;
use DTS\eBaySDK\Types\BaseType;
use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\UriResolver;
use \DTS\eBaySDK as Functions;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

class OAuthService
{
    const API_VERSION = 'v1';

    /**
     * @var array $endPoints The API endpoints.
     */
    private static array $endPoints = [
        'sandbox'    => 'https://api.sandbox.ebay.com/identity',
        'production' => 'https://api.ebay.com/identity'
    ];

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    private static array $operations = [
        'getUserToken' => [
            'method' => 'POST',
            'resource' => 'oauth2/token',
            'responseClass' => '\DTS\eBaySDK\OAuth\Types\GetUserTokenRestResponse',
            'params' => [
            ]
        ],
        'refreshUserToken' => [
            'method' => 'POST',
            'resource' => 'oauth2/token',
            'responseClass' => '\DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestResponse',
            'params' => [
            ]
        ],
        'getAppToken' => [
            'method' => 'POST',
            'resource' => 'oauth2/token',
            'responseClass' => '\DTS\eBaySDK\OAuth\Types\GetAppTokenRestResponse',
            'params' => [
            ]
        ]
    ];

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
     * @return array{apiVersion: array{valid: string[], default: string, required: true}, profile: array{valid: string[], fn: string}, credentials: array{valid: class-string<CredentialsInterface>[]|string[], fn: string, default: string[]}, debug: array{valid: string[], fn: string, default: false}, httpHandler: array{valid: string[], default: string}, httpOptions: array{valid: string[], default: array{http_errors: false}}, ruName: array{valid: string[], required: true}, sandbox: array{valid: string[], default: false}} An associative array of configuration definitions.
     */
    public static function getConfigDefinitions(): array
    {
        return [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\OAuth\Services\OAuthService::API_VERSION,
                'required' => true
            ],
            'profile' => [
                'valid' => ['string'],
                'fn'    => 'DTS\eBaySDK\applyProfile',
            ],
            'credentials' => [
                'valid'   => ['DTS\eBaySDK\Credentials\CredentialsInterface', 'array', 'callable'],
                'fn'      => 'DTS\eBaySDK\applyCredentials',
                'default' => [CredentialsProvider::class, 'defaultProvider']
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
            'ruName' => [
                'valid'    => ['string'],
                'required' => true
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
     * Helper method to return the value of the credentials configuration option.
     *
     * @return CredentialsInterface
     */
    public function getCredentials()
    {
        return $this->getConfig('credentials');
    }

    /**
     * @param array $params An associative array with state and scope as the keys.
     *
     * @return string The redirect URL.
     * @throws InvalidArgumentException .
     */
    public function redirectUrlForUser(array $params)
    {
        if (!array_key_exists('state', $params)) {
            throw new InvalidArgumentException('state parameter required');
        }

        if (!array_key_exists('scope', $params)) {
            throw new InvalidArgumentException('scope parameter required');
        }

        $url = $this->getConfig('sandbox')
            ? 'https://auth.sandbox.ebay.com/oauth2/authorize?'
            : 'https://auth.ebay.com/oauth2/authorize?';

        $urlParams = [
            'client_id'     => $this->getConfig('credentials')->getAppId(),
            'redirect_uri'  => $this->getConfig('ruName'),
            'response_type' => 'code',
            'state'         => $params['state'],
            'scope'         => implode(' ', $params['scope'])

        ];

        return $url.http_build_query($urlParams, null, '&', PHP_QUERY_RFC3986);
    }

    /**
     * @param GetUserTokenRestRequest $request
     * @return GetUserTokenRestResponse
     */
    public function getUserToken(GetUserTokenRestRequest $request)
    {
        return $this->getUserTokenAsync($request)->wait();
    }

    /**
     * @param GetUserTokenRestRequest $request
     * @return PromiseInterface
     */
    public function getUserTokenAsync(GetUserTokenRestRequest $request)
    {
        if (!$request) {
            $request = new GetUserTokenRestRequest();
        }

        if (!isset($request->grant_type)) {
            $request->grant_type = 'authorization_code';
        }

        if (!isset($request->redirect_uri)) {
            $request->redirect_uri = $this->getConfig('ruName');
        }

        return $this->callOperationAsync('getUserToken', $request);
    }

    /**
     * @param RefreshUserTokenRestRequest $request
     * @return RefreshUserTokenRestResponse
     */
    public function refreshUserToken(RefreshUserTokenRestRequest $request)
    {
        return $this->refreshUserTokenAsync($request)->wait();
    }

    /**
     * @param RefreshUserTokenRestRequest $request
     * @return PromiseInterface
     */
    public function refreshUserTokenAsync(RefreshUserTokenRestRequest $request)
    {
        if (!$request) {
            $request = new RefreshUserTokenRestRequest();
        }

        if (!isset($request->grant_type)) {
            $request->grant_type = 'refresh_token';
        }

        return $this->callOperationAsync('refreshUserToken', $request);
    }

    /**
     * @param GetAppTokenRestRequest|null $request
     * @return GetAppTokenRestResponse
     */
    public function getAppToken(GetAppTokenRestRequest $request = null)
    {
        return $this->getAppTokenAsync($request)->wait();
    }

    /**
     * @param GetAppTokenRestRequest|null $request
     * @return PromiseInterface
     */
    public function getAppTokenAsync(GetAppTokenRestRequest $request = null)
    {
        if ($request === null) {
            $request = new GetAppTokenRestRequest();
        }

        if (!isset($request->grant_type)) {
            $request->grant_type = 'client_credentials';
        }

        if (!isset($request->redirect_uri)) {
            $request->redirect_uri = $this->getConfig('ruName');
        }

        if (!isset($request->scope)) {
            $request->scope = 'https://api.ebay.com/oauth/api_scope';
        }

        return $this->callOperationAsync('getAppToken', $request);
    }

    /**
     * Sends an asynchronous API request.
     *
     * @param string $name The name of the operation.
     * @param BaseType|null $request Request object containing the request information.
     *
     * @return PromiseInterface A promise that will be resolved with an object created from the JSON response.
     */
    private function callOperationAsync(string $name, BaseType $request = null)
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

                return new $responseClass(
                    $json !== '' ? json_decode($json, true) : [],
                    $res->getStatusCode(),
                    $res->getHeaders()
                );
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
     * @return string The request body in URL-encoded format.
     */
    private function buildRequestBody(array $request)
    {
        $params = array_reduce(array_keys($request), static function ($carry, $key) use ($request) {
            $value = $request[$key];
            $carry[$key] = is_array($value) ? implode(' ', $value) : $value;
            return $carry;
        }, []);

        return empty($request) ? '' : http_build_query($params, null, '&', PHP_QUERY_RFC3986);
    }

    /**
     * Helper function that builds the HTTP request headers.
     *
     * @param string $body The request body.
     *
     * @return array An associative array of HTTP headers.
     */
    private function buildRequestHeaders(string $body): array
    {
        $credentials = $this->getConfig('credentials');
        $appId = $credentials->getAppId();
        $certId = $credentials->getCertId();

        $headers = [];

        $headers['Accept'] = 'application/json';
        $headers['Authorization'] = 'Basic '.base64_encode($appId.':'.$certId);
        $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        $headers['Content-Length'] = strlen($body);

        return $headers;
    }

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

        $str .= array_reduce(array_keys($headers), static function ($str, $key) use ($headers) : string {
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
