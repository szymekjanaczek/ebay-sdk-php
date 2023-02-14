<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\MerchantData\Types\CalculatedShippingRateType;

class CalculatedShippingRateTypeTest extends TestCase
{
    private CalculatedShippingRateType $obj;

    protected function setUp(): void
    {
        $this->obj = new CalculatedShippingRateType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\CalculatedShippingRateType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
