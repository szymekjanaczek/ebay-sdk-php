<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ResolutionCaseManagement\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ResolutionCaseManagement\Types\ItemType;

class ItemTypeTest extends TestCase
{
    private ItemType $obj;

    protected function setUp(): void
    {
        $this->obj = new ItemType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\ItemType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
