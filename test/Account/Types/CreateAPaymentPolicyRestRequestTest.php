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
use DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest;

class CreateAPaymentPolicyRestRequestTest extends TestCase
{
    private CreateAPaymentPolicyRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateAPaymentPolicyRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest', $this->obj);
    }

    public function testExtendsPaymentPolicyRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\PaymentPolicyRequest', $this->obj);
    }
}
