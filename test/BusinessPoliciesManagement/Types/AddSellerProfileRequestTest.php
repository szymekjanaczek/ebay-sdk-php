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
use DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest;

class AddSellerProfileRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new AddSellerProfileRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest', $this->obj);
    }
}
