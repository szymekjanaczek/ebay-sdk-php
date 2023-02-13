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
use DTS\eBaySDK\Analytics\Types\GetAllSellerProfilesRestResponse;

class GetAllSellerProfilesRestResponseTest extends TestCase
{
    private GetAllSellerProfilesRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAllSellerProfilesRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Analytics\Types\GetAllSellerProfilesRestResponse', $this->obj);
    }

    public function testExtendsFindSellerStandardsProfilesResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Analytics\Types\FindSellerStandardsProfilesResponse', $this->obj);
    }
}
