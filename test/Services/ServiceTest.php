<?php
namespace DTS\eBaySDK\Test\Services;

use PHPUnit\Framework\TestCase;
use Exception;
use DTS\eBaySDK\Test\TestTraits\ManageEnv;
use DTS\eBaySDK\Services\BaseService;
use DTS\eBaySDK\Credentials\Credentials;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\Test\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\ComplexClass;
use DTS\eBaySDK\Test\Mocks\HttpHandler;
use InvalidArgumentException;

class ServiceTest extends TestCase
{
    use ManageEnv;

    public function testConfigDefinitions(): void
    {
        $d = BaseService::getConfigDefinitions();

        $this->assertArrayHasKey('compressResponse', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['compressResponse']);

        $this->assertArrayHasKey('credentials', $d);
        $this->assertEquals([
            'valid'   => ['DTS\eBaySDK\Credentials\CredentialsInterface', 'array', 'callable'],
            'fn'      => 'DTS\eBaySDK\applyCredentials',
            'default' => [CredentialsProvider::class, 'defaultProvider']
        ], $d['credentials']);

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
            'default' => []
        ], $d['httpOptions']);

        $this->assertArrayHasKey('profile', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'fn'    => 'DTS\eBaySDK\applyProfile',
        ], $d['profile']);

        $this->assertArrayHasKey('sandbox', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['sandbox']);
    }

    public function testProductionUrlIsUsed(): void
    {
        // By default sandbox will be false.
        $h = new HttpHandler();
        $s = new Service(['httpHandler' => $h]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://production.com', $h->url);
    }

    public function testSandboxUrlIsUsed(): void
    {
        $h = new HttpHandler();
        $s = new Service([
            'sandbox' => true,
            'httpHandler' => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://sandbox.com', $h->url);
    }

    public function testHttpHeadersAreCreated(): void
    {
        $h = new HttpHandler();
        $s = new Service(['httpHandler' => $h]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertArrayHasKey('fooHdr', $h->headers);
        $this->assertEquals('foo', $h->headers['fooHdr']);
        $this->assertArrayHasKey('Content-Type', $h->headers);
        $this->assertEquals('text/xml', $h->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $h->headers);
        $this->assertEquals(strlen($r->toRequestXml()), $h->headers['Content-Length']);
    }

    public function testXmlIsCreated(): void
    {
        $h = new HttpHandler();
        $s = new Service(['httpHandler' => $h]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertEquals($r->toRequestXml(), $h->body);
    }

    public function testResponseIsReturned(): void
    {
        $s = new Service(['httpHandler' => new HttpHandler()]);
        $r = $s->foo(new ComplexClass());

        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\ComplexClass', $r);
    }

    public function testDebugging(): void
    {
        $str = '';
        $logfn = static function ($value) use (&$str) : void {
            $str .= $value;
        };

        $s = new Service([
            'debug' => ['logfn' => $logfn],
            'httpHandler' => new HttpHandler()
        ]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertStringContainsString('fooHdr: foo', $str);
        $this->assertStringContainsString('Content-Type: text/xml', $str);
        $this->assertStringContainsString('Content-Length: '.strlen($r->toRequestXml()), $str);
        $this->assertStringContainsString('<?xml version="1.0" encoding="UTF-8"?>', $str);
    }

    public function testCredentialsInstanceCanBePassed(): void
    {
        $s = new Service([
            'credentials' => new Credentials('111', '222', '333'),
            'httpHandler' => new HttpHandler()
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeHardCoded(): void
    {
        $s = new Service([
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ],
            'httpHandler' => new HttpHandler()
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeProvided(): void
    {
        $s = new Service([
            'credentials' => static function () : Credentials {
                return new Credentials('111', '222', '333');
            },
            'httpHandler' => new HttpHandler()
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeLoadedFromIni(): void
    {
        $ini = <<<EOT
[foo]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $s = new Service([
            'profile' => 'foo',
            'httpHandler' => new HttpHandler()
        ]);
        $c = $s->getCredentials();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    public function testCredentialsIniWillThrowException()
    {
        $ini = <<<EOT
[foo]
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('No credentials present in INI profile');

        $s = new Service([
            'profile' => 'foo',
            'httpHandler' => new HttpHandler()
        ]);

        try {
            $s->getCredentials();
        } catch (Exception $e) {
            unlink($dir . '/credentials');
            throw $e;
        }
    }

    public function testCredentialsProviderThrowsIfCantProvide(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot locate credentials');

        new Service([
            'credentials' => static function () : InvalidArgumentException {
                return new InvalidArgumentException('Cannot locate credentials');
            },
            'httpHandler' => new HttpHandler()
        ]);
    }

    public function testCanSetConfigurationOptionsAfterInstaniation(): void
    {
        $h = new HttpHandler();
        $s = new Service([
            'sandbox' => true,
            'compressResponse' => true,
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ],
            'httpHandler' => $h,
            'httpOptions' => []
        ]);

        $this->assertEquals([
            'sandbox' => true,
            'compressResponse' => true,
            'credentials' => new Credentials('111', '222', '333'),
            'debug' => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());

        $s->setConfig([
            'sandbox' => false,
            'compressResponse' => false,
            'credentials' => static function () : Credentials {
                return new Credentials('444', '555', '666');
            }
        ]);

        $this->assertEquals([
            'sandbox' => false,
            'compressResponse' => false,
            'credentials' => new Credentials('444', '555', '666'),
            'debug' => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());
    }

    public function testSetConfigWillThrow(): void
    {
        $s = new Service([
            'x'=> 1,
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        // $this->expectExceptionMessage('Invalid configuration value provided for "sandbox". Expected bool, but got int(-1)');
        $this->expectExceptionMessage('Invalid configuration value provided for "sandbox". Expected bool, but got');

        $s->setConfig(['sandbox' => -1]);
    }

    public function testAcceptEncodingHttpHeadersIsCreated(): void
    {
        $h = new HttpHandler();
        $s = new Service(['httpHandler' => $h, 'compressResponse' => true]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertArrayHasKey('Accept-Encoding', $h->headers);
        $this->assertEquals('application/gzip', $h->headers['Accept-Encoding']);
    }
}
