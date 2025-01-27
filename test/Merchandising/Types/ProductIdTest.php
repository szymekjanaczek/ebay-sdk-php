<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Merchandising\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Merchandising\Types\ProductId;

class ProductIdTest extends TestCase
{
    private ProductId $obj;

    protected function setUp(): void
    {
        $this->obj = new ProductId();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\ProductId', $this->obj);
    }

    public function testExtendsStringType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
    }
}
