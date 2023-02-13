<?php
namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Types\BooleanType;

class BooleanTypeTest extends TestCase
{
    private BooleanType $obj;

    protected function setUp(): void
    {
        $this->obj = new BooleanType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BooleanType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty(): void
    {
        $this->obj->value = true;
        $this->assertEquals(true, $this->obj->value);
        $this->assertisBool($this->obj->value);
    }
}
