<?php
namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Types\DecimalType;

class DecimalTypeTest extends TestCase
{
    private DecimalType $obj;

    protected function setUp(): void
    {
        $this->obj = new DecimalType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DecimalType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty(): void
    {
        $this->obj->value = 123;
        $this->assertEquals(123, $this->obj->value);
        $this->assertisInt($this->obj->value);

        $this->obj->value = -123;
        $this->assertEquals(-123, $this->obj->value);
        $this->assertisInt($this->obj->value);

        $this->obj->value = 123.00;
        $this->assertEquals(123.00, $this->obj->value);
        $this->assertisFloat($this->obj->value);

        $this->obj->value = -123.00;
        $this->assertEquals(-123.00, $this->obj->value);
        $this->assertisFloat($this->obj->value);

        $this->obj->value = 123.45;
        $this->assertEquals(123.45, $this->obj->value);
        $this->assertisFloat($this->obj->value);

        $this->obj->value = -123.45;
        $this->assertEquals(-123.45, $this->obj->value);
        $this->assertisFloat($this->obj->value);
    }
}
