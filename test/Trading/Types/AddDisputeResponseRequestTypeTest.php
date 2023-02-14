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
use DTS\eBaySDK\Trading\Types\AddDisputeResponseRequestType;

class AddDisputeResponseRequestTypeTest extends TestCase
{
    private AddDisputeResponseRequestType $obj;

    protected function setUp(): void
    {
        $this->obj = new AddDisputeResponseRequestType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AddDisputeResponseRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
