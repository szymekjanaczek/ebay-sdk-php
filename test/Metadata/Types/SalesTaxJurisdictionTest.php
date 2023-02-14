<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Metadata\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Metadata\Types\SalesTaxJurisdiction;

class SalesTaxJurisdictionTest extends TestCase
{
    private SalesTaxJurisdiction $obj;

    protected function setUp(): void
    {
        $this->obj = new SalesTaxJurisdiction();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\SalesTaxJurisdiction', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
