<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Enums\HandlingNameCodeType;

class HandlingNameCodeTypeTest extends TestCase
{
    private HandlingNameCodeType $obj;

    protected function setUp(): void
    {
        $this->obj = new HandlingNameCodeType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\HandlingNameCodeType', $this->obj);
    }
}
