<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse;

class GetAPaymentPolicyByIDRestResponseTest extends TestCase
{
    private GetAPaymentPolicyByIDRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAPaymentPolicyByIDRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse', $this->obj);
    }

    public function testExtendsPaymentPolicy(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\PaymentPolicy', $this->obj);
    }
}
