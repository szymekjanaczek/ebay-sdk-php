<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\PostOrder\Types\UpdateShipmentTrackingRestRequest;

class UpdateShipmentTrackingRestRequestTest extends TestCase
{
    private UpdateShipmentTrackingRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateShipmentTrackingRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UpdateShipmentTrackingRestRequest', $this->obj);
    }

    public function testExtendsUpdateTrackingRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UpdateTrackingRequest', $this->obj);
    }
}
