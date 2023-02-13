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
use DTS\eBaySDK\Trading\Types\LocalListingDistancesRegularDefinitionType;

class LocalListingDistancesRegularDefinitionTypeTest extends TestCase
{
    private LocalListingDistancesRegularDefinitionType $obj;

    protected function setUp(): void
    {
        $this->obj = new LocalListingDistancesRegularDefinitionType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\LocalListingDistancesRegularDefinitionType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
