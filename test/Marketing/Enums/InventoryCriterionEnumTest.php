<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Marketing\Enums\InventoryCriterionEnum;

class InventoryCriterionEnumTest extends TestCase
{
    private InventoryCriterionEnum $obj;

    protected function setUp(): void
    {
        $this->obj = new InventoryCriterionEnum();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Enums\InventoryCriterionEnum', $this->obj);
    }
}
