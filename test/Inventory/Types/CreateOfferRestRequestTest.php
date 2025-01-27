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
use DTS\eBaySDK\Inventory\Types\CreateOfferRestRequest;

class CreateOfferRestRequestTest extends TestCase
{
    private CreateOfferRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateOfferRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\CreateOfferRestRequest', $this->obj);
    }

    public function testExtendsEbayOfferDetailsWithKeys(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\EbayOfferDetailsWithKeys', $this->obj);
    }
}
