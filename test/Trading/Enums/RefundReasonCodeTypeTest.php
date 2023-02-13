<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Enums\RefundReasonCodeType;

class RefundReasonCodeTypeTest extends TestCase
{
    private RefundReasonCodeType $obj;

    protected function setUp(): void
    {
        $this->obj = new RefundReasonCodeType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RefundReasonCodeType', $this->obj);
    }
}
