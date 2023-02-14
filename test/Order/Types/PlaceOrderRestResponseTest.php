<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Order\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Order\Types\PlaceOrderRestResponse;

class PlaceOrderRestResponseTest extends TestCase
{
    private PlaceOrderRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new PlaceOrderRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\PlaceOrderRestResponse', $this->obj);
    }

    public function testExtendsPurchaseOrderSummary(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\PurchaseOrderSummary', $this->obj);
    }
}
