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
use DTS\eBaySDK\Order\Types\InitiateCheckoutSessionRestResponse;

class InitiateCheckoutSessionRestResponseTest extends TestCase
{
    private InitiateCheckoutSessionRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new InitiateCheckoutSessionRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\InitiateCheckoutSessionRestResponse', $this->obj);
    }

    public function testExtendsCheckoutSessionResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\CheckoutSessionResponse', $this->obj);
    }
}
