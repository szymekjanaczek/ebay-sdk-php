<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Types\RefundLineType;

class RefundLineTypeTest extends TestCase
{
    private RefundLineType $obj;

    protected function setUp(): void
    {
        $this->obj = new RefundLineType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\RefundLineType', $this->obj);
    }

    public function testExtendsAmountType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AmountType', $this->obj);
    }
}
