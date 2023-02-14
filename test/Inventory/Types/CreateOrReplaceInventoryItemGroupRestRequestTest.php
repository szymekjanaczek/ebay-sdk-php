<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest;

class CreateOrReplaceInventoryItemGroupRestRequestTest extends TestCase
{
    private CreateOrReplaceInventoryItemGroupRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateOrReplaceInventoryItemGroupRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemGroupRestRequest', $this->obj);
    }

    public function testExtendsInventoryItemGroup(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\InventoryItemGroup', $this->obj);
    }
}
