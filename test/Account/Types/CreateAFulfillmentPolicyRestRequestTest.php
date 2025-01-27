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
use DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest;

class CreateAFulfillmentPolicyRestRequestTest extends TestCase
{
    private CreateAFulfillmentPolicyRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateAFulfillmentPolicyRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest', $this->obj);
    }

    public function testExtendsFulfillmentPolicyRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\FulfillmentPolicyRequest', $this->obj);
    }
}
