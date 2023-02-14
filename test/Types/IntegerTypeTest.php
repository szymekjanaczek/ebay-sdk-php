<?php

namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Types\IntegerType;

class IntegerTypeTest extends TestCase
{
    private IntegerType $obj;

    protected function setUp(): void
    {
        $this->obj = new IntegerType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\IntegerType', $this->obj);
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
    }
}
