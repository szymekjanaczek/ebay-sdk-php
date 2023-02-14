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
use DTS\eBaySDK\BusinessPoliciesManagement\Types\BaseResponse;

class BaseResponseTest extends TestCase
{
    private BaseResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new BaseResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\BaseResponse', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
