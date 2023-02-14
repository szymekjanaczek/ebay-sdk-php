<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\PostOrder\Types\ProvideInquiryRefundInfoRestRequest;

class ProvideInquiryRefundInfoRestRequestTest extends TestCase
{
    private ProvideInquiryRefundInfoRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new ProvideInquiryRefundInfoRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ProvideInquiryRefundInfoRestRequest', $this->obj);
    }

    public function testExtendsSellerProvideRefundInfoRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SellerProvideRefundInfoRequest', $this->obj);
    }
}
