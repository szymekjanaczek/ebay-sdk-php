<?php
namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Types\DoubleType;

class DoubleTypeTest extends TestCase
{
    private DoubleType $obj;

    protected function setUp(): void
    {
        $this->obj = new DoubleType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DoubleType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty(): void
    {
        $this->obj->value = 123.45;
        $this->assertEquals(123.45, $this->obj->value);
        $this->assertisFloat($this->obj->value);
    }
}
