<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\MerchantData\Enums\AddressRecordTypeCodeType;

class AddressRecordTypeCodeTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new AddressRecordTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\AddressRecordTypeCodeType', $this->obj);
    }
}
