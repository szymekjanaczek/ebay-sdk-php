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
use DTS\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse;

class BulkMigrateListingsRestResponseTest extends TestCase
{
    private BulkMigrateListingsRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new BulkMigrateListingsRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse', $this->obj);
    }

    public function testExtendsBulkMigrateListingResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\BulkMigrateListingResponse', $this->obj);
    }
}
