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
use DTS\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest;

class DeleteAFulfillmentPolicyRestRequestTest extends TestCase
{
    private DeleteAFulfillmentPolicyRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new DeleteAFulfillmentPolicyRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
