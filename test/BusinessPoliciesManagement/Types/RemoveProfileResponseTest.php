<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BusinessPoliciesManagement\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse;

class RemoveProfileResponseTest extends TestCase
{
    private RemoveProfileResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new RemoveProfileResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse', $this->obj);
    }

    public function testExtendsBaseResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\BaseResponse', $this->obj);
    }
}
