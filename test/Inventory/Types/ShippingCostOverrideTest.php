<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Inventory\Types\ShippingCostOverride;

class ShippingCostOverrideTest extends TestCase
{
    private ShippingCostOverride $obj;

    protected function setUp(): void
    {
        $this->obj = new ShippingCostOverride();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\ShippingCostOverride', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
