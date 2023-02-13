<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosureType;

class BuyerPackageEnclosureTypeTest extends TestCase
{
    private BuyerPackageEnclosureType $obj;

    protected function setUp(): void
    {
        $this->obj = new BuyerPackageEnclosureType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\BuyerPackageEnclosureType', $this->obj);
    }

    public function testExtendsStringType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
    }
}
