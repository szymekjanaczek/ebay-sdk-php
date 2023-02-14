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
use DTS\eBaySDK\Inventory\Types\GetListingFeesRestResponse;

class GetListingFeesRestResponseTest extends TestCase
{
    private GetListingFeesRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetListingFeesRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\GetListingFeesRestResponse', $this->obj);
    }

    public function testExtendsFeesSummaryResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\FeesSummaryResponse', $this->obj);
    }
}
