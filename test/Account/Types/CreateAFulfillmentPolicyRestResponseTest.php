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
use DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse;

class CreateAFulfillmentPolicyRestResponseTest extends TestCase
{
    private CreateAFulfillmentPolicyRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateAFulfillmentPolicyRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse', $this->obj);
    }

    public function testExtendsSetFulfillmentPolicyResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\SetFulfillmentPolicyResponse', $this->obj);
    }
}
