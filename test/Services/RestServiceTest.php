<?php
namespace DTS\eBaySDK\Test\Services;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Services\BaseRestService;
use DTS\eBaySDK\Test\Mocks\RestService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;
use DTS\eBaySDK\Test\Mocks\HttpRestHandler;
use InvalidArgumentException;

class RestServiceTest extends TestCase
{
    public function testConfigDefinitions(): void
    {
        $d = BaseRestService::getConfigDefinitions();

        $this->assertArrayHasKey('compressResponse', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['compressResponse']);

        $this->assertArrayHasKey('debug', $d);
        $this->assertEquals([
            'valid'   => ['bool', 'array'],
            'fn'      => 'DTS\eBaySDK\applyDebug',
            'default' => false
        ], $d['debug']);

        $this->assertArrayHasKey('httpHandler', $d);
        $this->assertEquals([
            'valid'   => ['callable'],
            'default' => 'DTS\eBaySDK\defaultHttpHandler'
        ], $d['httpHandler']);

        $this->assertArrayHasKey('httpOptions', $d);
        $this->assertEquals([
            'valid'   => ['array'],
            'default' => ['http_errors' => false]
        ], $d['httpOptions']);

        $this->assertArrayHasKey('requestLanguage', $d);
        $this->assertEquals([
            'valid'   => ['string']
        ], $d['requestLanguage']);

        $this->assertArrayHasKey('responseLanguage', $d);
        $this->assertEquals([
            'valid'   => ['string']
        ], $d['responseLanguage']);

        $this->assertArrayHasKey('sandbox', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['sandbox']);
    }

    public function testProductionUrlIsUsed(): void
    {
        // By default sandbox will be false.
        $h = new HttpRestHandler();
        $s = new RestService([
            'httpHandler'   => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://production.com/v1/', $h->url);
    }

    public function testSandboxUrlIsUsed(): void
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'sandbox' => true,
            'httpHandler'   => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://sandbox.com/v1/', $h->url);
    }

    public function testHttpHeadersAreCreated(): void
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'requestLanguage' => 'en-GB',
            'responseLanguage' => 'en-US',
            'sandbox' => true,
            'httpHandler'   => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertArrayHasKey('Accept', $h->headers);
        $this->assertEquals('application/json', $h->headers['Accept']);
        $this->assertArrayHasKey('Accept-Language', $h->headers);
        $this->assertEquals('en-US', $h->headers['Accept-Language']);
        $this->assertArrayHasKey('Content-Language', $h->headers);
        $this->assertEquals('en-GB', $h->headers['Content-Language']);
        $this->assertArrayHasKey('Content-Type', $h->headers);
        $this->assertEquals('application/json', $h->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $h->headers);
        $this->assertEquals(0, $h->headers['Content-Length']);
    }

    public function testJsonIsCreated(): void
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'httpHandler'   => $h
        ]);
        $r = new ComplexClass();
        $r->foo = 'foo';
        $s->foo($r);

        $this->assertEquals(json_encode($r->toArray()), $h->body);
    }

    public function testJsonIsNotCreated(): void
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'httpHandler'   => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('', $h->body);
    }

    public function testResponseIsReturned(): void
    {
        $s = new RestService([
            'httpHandler'   => new HttpRestHandler()
        ]);
        $r = $s->foo(new ComplexClass());

        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\ComplexClass', $r);
    }

    public function testDebugging(): void
    {
        $str = '';
        $logfn = function ($value) use (&$str): void {
            $str .= $value;
        };

        $s = new RestService([
            'debug' => ['logfn' => $logfn],
            'httpHandler'   => new HttpRestHandler()
        ]);
        $r = new ComplexClass();
        $r->foo = 'foo';
        $s->foo($r);

        $this->assertStringContainsString('Content-Type: application/json', $str);
        $this->assertStringContainsString('Content-Length: '.strlen(json_encode($r->toArray())), $str);
        $this->assertStringContainsString('{', $str);
        $this->assertStringContainsString('}', $str);
    }

    public function testCanSetConfigurationOptionsAfterInstaniation(): void
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'sandbox' => true,
            'compressResponse' => true,
            'httpHandler' => $h,
            'httpOptions' => []
        ]);

        $this->assertEquals([
            'apiVersion' => 'v1',
            'compressResponse' => true,
            'sandbox' => true,
            'debug' => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());

        $s->setConfig([
            'sandbox' => false,
            'compressResponse' => false,
        ]);

        $this->assertEquals([
            'apiVersion' => 'v1',
            'compressResponse' => false,
            'sandbox' => false,
            'debug' => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());
    }

    public function testSetConfigWillThrow(): void
    {
        $s = new RestService([
            'x'=> 1
        ]);

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
//        $this->expectExceptionMessage('Invalid configuration value provided for "sandbox". Expected bool, but got int(-1)');
        $this->expectExceptionMessage('Invalid configuration value provided for "sandbox". Expected bool, but got');

        $s->setConfig(['sandbox' => -1]);
    }

    public function testAcceptEncodingHttpHeadersIsCreated(): void
    {
        $h = new HttpRestHandler();
        $s = new RestService(['httpHandler' => $h, 'compressResponse' => true]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertArrayHasKey('Accept-Encoding', $h->headers);
        $this->assertEquals('application/gzip', $h->headers['Accept-Encoding']);
    }
}
