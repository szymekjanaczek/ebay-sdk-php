<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ReturnManagement\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ReturnManagement\Enums\ShipmentStatusType;

class ShipmentStatusTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new ShipmentStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Enums\ShipmentStatusType', $this->obj);
    }
}
