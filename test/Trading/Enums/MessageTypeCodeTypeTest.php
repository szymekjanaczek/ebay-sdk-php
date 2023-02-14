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
use DTS\eBaySDK\Trading\Enums\MessageTypeCodeType;

class MessageTypeCodeTypeTest extends TestCase
{
    private MessageTypeCodeType $obj;

    protected function setUp(): void
    {
        $this->obj = new MessageTypeCodeType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\MessageTypeCodeType', $this->obj);
    }
}
