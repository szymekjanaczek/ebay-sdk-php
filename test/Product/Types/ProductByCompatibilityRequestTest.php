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
use DTS\eBaySDK\Product\Types\ProductByCompatibilityRequest;

class ProductByCompatibilityRequestTest extends TestCase
{
    private ProductByCompatibilityRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new ProductByCompatibilityRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Types\ProductByCompatibilityRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
