<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Taxonomy\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Taxonomy\Enums\ItemToAspectCardinalityEnum;

class ItemToAspectCardinalityEnumTest extends TestCase
{
    private ItemToAspectCardinalityEnum $obj;

    protected function setUp(): void
    {
        $this->obj = new ItemToAspectCardinalityEnum();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Enums\ItemToAspectCardinalityEnum', $this->obj);
    }
}
