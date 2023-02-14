<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Shopping\Enums\ShippingTypeCodeType;

class ShippingTypeCodeTypeTest extends TestCase
{
    private ShippingTypeCodeType $obj;

    protected function setUp(): void
    {
        $this->obj = new ShippingTypeCodeType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\ShippingTypeCodeType', $this->obj);
    }
}
