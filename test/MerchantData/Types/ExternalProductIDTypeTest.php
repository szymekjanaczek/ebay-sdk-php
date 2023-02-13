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
use DTS\eBaySDK\MerchantData\Types\ExternalProductIDType;

class ExternalProductIDTypeTest extends TestCase
{
    private ExternalProductIDType $obj;

    protected function setUp(): void
    {
        $this->obj = new ExternalProductIDType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ExternalProductIDType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
