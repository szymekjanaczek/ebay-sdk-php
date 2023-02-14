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
use DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType;

class Group1MaxFlatShippingCostDefinitionTypeTest extends TestCase
{
    private Group1MaxFlatShippingCostDefinitionType $obj;

    protected function setUp(): void
    {
        $this->obj = new Group1MaxFlatShippingCostDefinitionType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
