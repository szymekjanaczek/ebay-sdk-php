<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ReturnManagement\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest;

class ProvideSellerInfoRequestTest extends TestCase
{
    private ProvideSellerInfoRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new ProvideSellerInfoRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest', $this->obj);
    }

    public function testExtendsBaseRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Types\BaseRequest', $this->obj);
    }
}
