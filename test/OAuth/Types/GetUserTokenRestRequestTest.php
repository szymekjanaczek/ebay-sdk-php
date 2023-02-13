<?php
namespace DTS\eBaySDK\Test\OAuth\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\OAuth\Types\GetUserTokenRestRequest;

class GetUserTokenRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetUserTokenRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\OAuth\Types\GetUserTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->redirect_uri = 'bar';
        $this->obj->code = 'baz';

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->redirect_uri);
        $this->assertEquals('baz', $this->obj->code);
    }
}
