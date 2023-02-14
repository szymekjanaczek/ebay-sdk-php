<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Analytics\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Analytics\Types\GetASpecificSellerProfileRestResponse;

class GetASpecificSellerProfileRestResponseTest extends TestCase
{
    private GetASpecificSellerProfileRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetASpecificSellerProfileRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Analytics\Types\GetASpecificSellerProfileRestResponse', $this->obj);
    }

    public function testExtendsStandardsProfile(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Analytics\Types\StandardsProfile', $this->obj);
    }
}
