<?php
namespace DTS\eBaySDK\Test\OAuth\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestRequest;

class RefreshUserTokenRestRequestTest extends TestCase
{
    private RefreshUserTokenRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new RefreshUserTokenRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testProperties(): void
    {
        $this->obj->grant_type = 'foo';
        $this->obj->refresh_token = 'bar';
        $this->obj->scope = ['foo', 'bar', 'baz'];

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->refresh_token);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->scope);
    }
}
