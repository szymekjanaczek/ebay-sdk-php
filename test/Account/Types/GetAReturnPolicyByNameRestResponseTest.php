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
use DTS\eBaySDK\Account\Types\GetAReturnPolicyByNameRestResponse;

class GetAReturnPolicyByNameRestResponseTest extends TestCase
{
    private GetAReturnPolicyByNameRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAReturnPolicyByNameRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\GetAReturnPolicyByNameRestResponse', $this->obj);
    }

    public function testExtendsReturnPolicy(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\ReturnPolicy', $this->obj);
    }
}
