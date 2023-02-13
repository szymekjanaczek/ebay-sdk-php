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
use DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse;

class GetInventoryItemsRestResponseTest extends TestCase
{
    private GetInventoryItemsRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetInventoryItemsRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\GetInventoryItemsRestResponse', $this->obj);
    }

    public function testExtendsInventoryItems(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\InventoryItems', $this->obj);
    }
}
