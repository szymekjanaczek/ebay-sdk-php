<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Inventory\Types\GetOffersRestResponse;

class GetOffersRestResponseTest extends TestCase
{
    private GetOffersRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetOffersRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\GetOffersRestResponse', $this->obj);
    }

    public function testExtendsOffers(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\Offers', $this->obj);
    }
}
