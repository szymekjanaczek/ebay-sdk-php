<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ReturnManagement\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ReturnManagement\Types\Address;

class AddressTest extends TestCase
{
    private Address $obj;

    protected function setUp(): void
    {
        $this->obj = new Address();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Types\Address', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
