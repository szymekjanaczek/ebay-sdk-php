<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Types\TaxIdentifierAttributeType;

class TaxIdentifierAttributeTypeTest extends TestCase
{
    private TaxIdentifierAttributeType $obj;

    protected function setUp(): void
    {
        $this->obj = new TaxIdentifierAttributeType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\TaxIdentifierAttributeType', $this->obj);
    }

    public function testExtendsStringType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
    }
}
