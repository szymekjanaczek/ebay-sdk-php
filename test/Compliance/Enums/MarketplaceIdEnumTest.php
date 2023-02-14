<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Compliance\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Compliance\Enums\MarketplaceIdEnum;

class MarketplaceIdEnumTest extends TestCase
{
    private MarketplaceIdEnum $obj;

    protected function setUp(): void
    {
        $this->obj = new MarketplaceIdEnum();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Compliance\Enums\MarketplaceIdEnum', $this->obj);
    }
}
