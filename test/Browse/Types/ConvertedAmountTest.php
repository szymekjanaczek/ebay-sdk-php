<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Browse\Types\ConvertedAmount;

class ConvertedAmountTest extends TestCase
{
    private ConvertedAmount $obj;

    protected function setUp(): void
    {
        $this->obj = new ConvertedAmount();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\ConvertedAmount', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
