<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Enums\DiscountNameCodeType;

class DiscountNameCodeTypeTest extends TestCase
{
    private DiscountNameCodeType $obj;

    protected function setUp(): void
    {
        $this->obj = new DiscountNameCodeType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DiscountNameCodeType', $this->obj);
    }
}
