<?php
namespace DTS\eBaySDK\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\UriResolver;
use DTS\eBaySDK\Test\Mocks\StaticMethods;
use InvalidArgumentException;

class UriResolverTest extends TestCase
{
    public function testDefaults(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'array' => [
                'valid' => ['array'],
                'default' => ['foo', 'bar']
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
        ];

        $paramValues = [];

        $this->assertEquals(
            'https://example.com/v1/item?array=foo%2Cbar&bool=true&callable=-1&int=-1&string=foo',
            $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues)
        );
    }

    public function testRequired(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['int'],
                'required' => true
            ]
        ];

        $paramValues = [];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Missing required uri parameters');

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testValidatesArray(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['array']
            ]
        ];

        $paramValues = [
            'foo' => -1
        ];

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected array, but got');
        // $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected array, but got int(-1)');

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testValidatesBool(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['bool']
            ]
        ];

        $paramValues = [
            'foo' => -1
        ];

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected bool, but got');
        // $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected bool, but got int(-1)');

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testValidatesCallable(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['callable']
            ]
        ];

        $paramValues = [
            'foo' => -1
        ];

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected callable, but got');
        // $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected callable, but got int(-1)');

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testValidatesInt(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['int']
            ]
        ];

        $paramValues = [
            'foo' => 'foo'
        ];

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected int, but got');
        // $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected int, but got string(3)');

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testValidatesStrings(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['string']
            ]
        ];

        $paramValues = [
            'foo' => -1
        ];

        $this->expectException(InvalidArgumentException::class);
        // todo(@szymekjanaczek) update to use regex ane full info what is returned.
        $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected string, but got');
        // $this->expectExceptionMessage('Invalid uri parameter value provided for "foo". Expected string, but got int(-1)');

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testAllowsValid(): void
    {
        $r = new UriResolver();

        $paramDefs = [
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
            'string' => [
                'valid' => ['string']
            ]
        ];

        $paramValues = [
            'array' => [],
            'bool' => true,
            'callable' => function (): void {
            },
            'int' => 1,
            'string' => 'foo'
        ];

        $this->assertEquals(
            'https://example.com/v1/item?array=&bool=true&callable=&int=1&string=foo',
            $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues)
        );
    }

    public function testFn(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['int'],
                'fn' => [StaticMethods::class, 'applyConfigValue']
            ]
        ];

        $paramValues = [
            'foo' => 1
        ];

        $this->assertEquals(
            'https://example.com/v1/item?foo=3',
            $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues)
        );
    }

    public function testFillsInPathParameters(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'path1' => [
                'valid' => ['string']
            ],
            'path2' => [
                'valid' => ['string']
            ],
            'param1' => [
                'valid' => ['string']
            ],
            'param2' => [
                'valid' => ['string']
            ]
        ];

        $paramValues = [
            'path1' => 'foo',
            'path2' => 'bar',
            'param1' => 'baz',
            'param2' => 'shaz'
        ];

        $this->assertEquals(
            'https://example.com/v1/item/foo/bar?param1=baz&param2=shaz',
            $r->resolve('https://example.com', 'v1', 'item/{path1}/{path2}', $paramDefs, $paramValues)
        );
    }

    public function testParamMustExist(): void
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['string']
            ]
        ];

        $paramValues = [
            'bar' => -1
        ];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unknown uri parameter "bar" provided');

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testNoParams(): void
    {
        $r = new UriResolver();

        $paramDefs = [
        ];

        $paramValues = [
        ];

        $this->assertEquals(
            'https://example.com/v1/item',
            $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues)
        );
    }
}
