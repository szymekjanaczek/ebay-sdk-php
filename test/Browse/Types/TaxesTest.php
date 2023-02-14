<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Browse\Types\Taxes;

class TaxesTest extends TestCase
{
    private Taxes $obj;

    protected function setUp(): void
    {
        $this->obj = new Taxes();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\Taxes', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
