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
use DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest;

class UpdateAReturnPolicyRestRequestTest extends TestCase
{
    private UpdateAReturnPolicyRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateAReturnPolicyRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest', $this->obj);
    }

    public function testExtendsReturnPolicyRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\ReturnPolicyRequest', $this->obj);
    }
}
