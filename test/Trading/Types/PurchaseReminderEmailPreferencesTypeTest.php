<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType;

class PurchaseReminderEmailPreferencesTypeTest extends TestCase
{
    private PurchaseReminderEmailPreferencesType $obj;

    protected function setUp(): void
    {
        $this->obj = new PurchaseReminderEmailPreferencesType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
