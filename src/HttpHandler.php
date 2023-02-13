<?php
namespace DTS\eBaySDK;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;

/**
 * @internal Sends PSR-7-compatible requests using a Guzzle client.
 */
class HttpHandler
{
    private ClientInterface|Client $client;

    /**
     * @var array Associative array of HTTP options that the SDK supports.
     */
    private static array $validOptions = [
        'connect_timeout' => true,
        'curl'            => true,
        'debug'           => true,
        'delay'           => true,
        'http_errors'     => true,
        'proxy'           => true,
        'timeout'         => true,
        'verify'          => true
    ];

    /**
     * @param ClientInterface|null $client The client for making the HTTP request.
     */
    public function __construct(ClientInterface $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
    * @param \Psr7Request|RequestInterface $request
    * @param array $options Http options for the client.
    *
     * @return PromiseInterface Promise that will be resolved with a
    Psr\Http\Message\ResponseInterface response object.
    */
    public function __invoke(RequestInterface $request, array $options)
    {
        // Remove options that are not supported.
        foreach (array_keys($options) as $key) {
            if (!isset(self::$validOptions[$key])) {
                unset($options[$key]);
            }
        }

        return $this->client->sendAsync($request, $options);
    }
}
