<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Order\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Order\Types\UpdateShippingOptionRestRequest;

class UpdateShippingOptionRestRequestTest extends TestCase
{
    private UpdateShippingOptionRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateShippingOptionRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdateShippingOptionRestRequest', $this->obj);
    }

    public function testExtendsUpdateShippingOption(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdateShippingOption', $this->obj);
    }
}
