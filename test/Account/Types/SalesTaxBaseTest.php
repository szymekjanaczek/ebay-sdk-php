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
use DTS\eBaySDK\Account\Types\SalesTaxBase;

class SalesTaxBaseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new SalesTaxBase();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\SalesTaxBase', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
