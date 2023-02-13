<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ProductMetadata\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse;

class GetCompatibilitySearchDataVersionResponseTest extends TestCase
{
    private GetCompatibilitySearchDataVersionResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetCompatibilitySearchDataVersionResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\BaseServiceResponse', $this->obj);
    }
}
