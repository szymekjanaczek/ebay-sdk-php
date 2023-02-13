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
use DTS\eBaySDK\Order\Types\UpdateQuantityForLineItemRestResponse;

class UpdateQuantityForLineItemRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateQuantityForLineItemRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdateQuantityForLineItemRestResponse', $this->obj);
    }

    public function testExtendsCheckoutSessionResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\CheckoutSessionResponse', $this->obj);
    }
}
