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
use DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest;

class RemoveSellerProfilesRequestTest extends TestCase
{
    private RemoveSellerProfilesRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new RemoveSellerProfilesRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest', $this->obj);
    }

    public function testExtendsBaseRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest', $this->obj);
    }
}
