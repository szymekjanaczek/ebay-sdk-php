<?php
namespace DTS\eBaySDK\Test;

use PHPUnit\Framework\TestCase;
use stdClass;
use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\Test\Mocks\StaticMethods;
use InvalidArgumentException;

class ConfigurationResolverTest extends TestCase
{
    public function testDefaults(): void
    {
        $r = new ConfigurationResolver([
            'array' => [
                'valid' => ['array'],
                'default' => ['foo']
            ],
            'bool' => [
                'valid' => ['bool'],
                'default' => true
            ],
            'callable' => [
                'valid' => ['int'],
                'default' => [StaticMethods::class, 'defaultConfigValue']
            ],
            'int' => [
                'valid' => ['int'],
                'default' => -1
            ],
            'string' => [
                'valid' => ['string'],
                'default' => 'foo'
            ]
        ]);

        $this->assertEquals($r->resolve([]), [
            'array' => ['foo'],
            'bool' => true,
            'callable' => -1,
            'int' => -1,
            'string' => 'foo',
        ]);
    }

    public function testRequired(): void
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int'],
                'required' => true
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Missing required configuration options');

        $r->resolve([]);
    }

    public function testValidatesArray(): void
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['array']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected array, but got');

        $r->resolve(['foo' => -1]);
    }

    public function testValidatesBool(): void
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['bool']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected bool, but got');

        $r->resolve(['foo' => -1]);
    }

    public function testValidatesCallable(): void
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['callable']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected callable, but got');

        $r->resolve(['foo' => -1]);
    }

    public function testValidatesInstanceOf(): void
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['StdClass']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected StdClass, but got');

        $r->resolve(['foo' => -1]);
    }

    public function testValidatesInt(): void
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected int, but got');

        $r->resolve(['foo' => 'foo']);
    }

    public function testValidatesStrings(): void
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['string']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected string, but got');

        $r->resolve(['foo' => -1]);
    }

    public function testAllowsValid(): void
    {
        $r = new ConfigurationResolver([
            'array' => [
                'valid' => ['array']
            ],
            'bool' => [
                'valid' => ['bool']
            ],
            'callable' => [
                'valid' => ['callable']
            ],
            'int' => [
                'valid' => ['int']
            ],
            'stdClass' => [
                'valid' => ['StdClass']
            ],
            'string' => [
                'valid' => ['string']
            ]
        ]);

        $options = [
            'array' => [],
            'bool' => true,
            'callable' => static function () : void {
            },
            'int' => 1,
            'stdClass' => new stdClass(),
            'string' => 'foo'
        ];

        $this->assertEquals($r->resolve($options), $options);
    }

    public function testFn(): void
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int'],
                'fn' => [StaticMethods::class, 'applyConfigValue']
            ]
        ]);
        $this->assertEquals($r->resolve(['foo' => 1]), ['foo' => 3]);
    }
}
