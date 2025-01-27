<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Feed\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Feed\Types\ItemFeed;

class ItemFeedTest extends TestCase
{
    private ItemFeed $obj;

    protected function setUp(): void
    {
        $this->obj = new ItemFeed();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Feed\Types\ItemFeed', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
