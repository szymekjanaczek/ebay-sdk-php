<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Fulfillment\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest;

class GetAShippingFulfillmentRestRequestTest extends TestCase
{
    private GetAShippingFulfillmentRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAShippingFulfillmentRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
