<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Account\Enums\ShippingCostTypeEnum;

class ShippingCostTypeEnumTest extends TestCase
{
    private ShippingCostTypeEnum $obj;

    protected function setUp(): void
    {
        $this->obj = new ShippingCostTypeEnum();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Enums\ShippingCostTypeEnum', $this->obj);
    }
}
