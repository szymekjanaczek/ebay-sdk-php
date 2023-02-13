<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Shopping\Types\SellingStatusType;

class SellingStatusTypeTest extends TestCase
{
    private SellingStatusType $obj;

    protected function setUp(): void
    {
        $this->obj = new SellingStatusType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\SellingStatusType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
