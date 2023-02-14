<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Product\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Product\Types\NumericValue;

class NumericValueTest extends TestCase
{
    private NumericValue $obj;

    protected function setUp(): void
    {
        $this->obj = new NumericValue();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Types\NumericValue', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
