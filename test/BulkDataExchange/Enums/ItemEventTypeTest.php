<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BulkDataExchange\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\BulkDataExchange\Enums\ItemEventType;

class ItemEventTypeTest extends TestCase
{
    private ItemEventType $obj;

    protected function setUp(): void
    {
        $this->obj = new ItemEventType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\ItemEventType', $this->obj);
    }
}
