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
use DTS\eBaySDK\Trading\Types\AddMemberMessagesAAQToBidderRequestType;

class AddMemberMessagesAAQToBidderRequestTypeTest extends TestCase
{
    private AddMemberMessagesAAQToBidderRequestType $obj;

    protected function setUp(): void
    {
        $this->obj = new AddMemberMessagesAAQToBidderRequestType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AddMemberMessagesAAQToBidderRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
