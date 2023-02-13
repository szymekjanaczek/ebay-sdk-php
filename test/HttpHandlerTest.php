<?php
namespace DTS\eBaySDK\Test;

use PHPUnit\Framework\TestCase;
use Exception;
use DTS\eBaySDK\HttpHandler;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class HttpHandlerTest extends TestCase
{
    public function testWorksWithSuccessfulRequest(): void
    {
        $mock = new MockHandler([new Response(200, [], 'OK')]);
        $client = new Client(['handler' => $mock]);
        $httpHandler = new HttpHandler($client);

        $request = new Request('POST', 'http://example.com', [], '');
        $response = $httpHandler($request, [])->wait()->getBody()->getContents();
        $this->assertStringContainsString('OK', $response);
    }

    public function testWorksWithFailedRequest(): void
    {
        $mock = new MockHandler([new Exception('FAIL')]);
        $client = new Client(['handler' => $mock]);
        $httpHandler = new HttpHandler($client);

        $request = new Request('POST', 'http://example.com', [], '');
        try {
            $httpHandler($request, [])->wait();
            $this->fail();
        } catch (Exception $e) {
            $this->assertStringContainsString('FAIL', $e->getMessage());
        }
    }
}
