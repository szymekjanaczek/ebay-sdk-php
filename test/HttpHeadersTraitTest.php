<?php

namespace DTS\eBaySDK\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Test\Mocks\HttpHeaders;

class HttpHeadersTraitTest extends TestCase
{
    public function testNoHeaders(): void
    {
        $h = new HttpHeaders([]);

        $this->assertEquals([], $h->getHeaders());
    }

    public function testReturnsHeaders(): void
    {
        $h = new HttpHeaders([
            'foo' => 'foo',
            'Bar' => 'bar',
            'bar' => 'foo'
        ]);

        $this->assertEquals([
            'foo' => ['foo'],
            'Bar' => ['bar', 'foo']
        ], $h->getHeaders());
    }

    public function testReturnAHeader(): void
    {
        $h = new HttpHeaders([
            'foo' => 'foo',
            'Bar' => 'bar',
            'bar' => 'foo'
        ]);

        $this->assertEquals(['foo'], $h->getHeader('FOO'));
        $this->assertEquals(['bar', 'foo'], $h->getHeader('bAR'));
    }

    public function testHasHeader(): void
    {
        $h = new HttpHeaders([
            'foo' => 'foo',
            'Bar' => 'bar',
            'bar' => 'foo'
        ]);

        $this->assertEquals(true, $h->hasHeader('FOO'));
        $this->assertEquals(true, $h->hasHeader('bAR'));
    }

    public function testGetHeaderLine(): void
    {
        $h = new HttpHeaders([
            'foo' => 'foo',
            'Bar' => 'bar',
            'bar' => 'foo'
        ]);

        $this->assertEquals('foo', $h->getHeaderLine('FOO'));
        $this->assertEquals('bar, foo', $h->getHeaderLine('bAR'));
    }
}
