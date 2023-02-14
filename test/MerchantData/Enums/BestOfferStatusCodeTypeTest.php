<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\MerchantData\Enums\BestOfferStatusCodeType;

class BestOfferStatusCodeTypeTest extends TestCase
{
    private BestOfferStatusCodeType $obj;

    protected function setUp(): void
    {
        $this->obj = new BestOfferStatusCodeType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\BestOfferStatusCodeType', $this->obj);
    }
}
