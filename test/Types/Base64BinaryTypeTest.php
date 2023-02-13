<?php
namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Types\Base64BinaryType;

class Base64BinaryTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new Base64BinaryType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\Base64BinaryType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 'foo';
        $this->assertEquals('foo', $this->obj->value);
        $this->assertisString($this->obj->value);
    }
}
