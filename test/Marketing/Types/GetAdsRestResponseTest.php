<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Marketing\Types\GetAdsRestResponse;

class GetAdsRestResponseTest extends TestCase
{
    private GetAdsRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAdsRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetAdsRestResponse', $this->obj);
    }

    public function testExtendsAdPagedCollection(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\AdPagedCollection', $this->obj);
    }
}
