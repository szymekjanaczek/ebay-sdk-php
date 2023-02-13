<?php
namespace DTS\eBaySDK\Test\OAuth\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\OAuth\Types\GetAppTokenRestRequest;

class GetAppTokenRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAppTokenRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\OAuth\Types\GetAppTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->redirect_uri = 'bar';
        $this->obj->scope = 'baz';

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->redirect_uri);
        $this->assertEquals('baz', $this->obj->scope);
    }
}
