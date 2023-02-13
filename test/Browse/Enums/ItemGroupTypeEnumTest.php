<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Browse\Enums\ItemGroupTypeEnum;

class ItemGroupTypeEnumTest extends TestCase
{
    private ItemGroupTypeEnum $obj;

    protected function setUp(): void
    {
        $this->obj = new ItemGroupTypeEnum();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Enums\ItemGroupTypeEnum', $this->obj);
    }
}
