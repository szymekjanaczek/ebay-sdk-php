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
use DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest;

class GetProductSearchValuesRequestTest extends TestCase
{
    private GetProductSearchValuesRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetProductSearchValuesRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest', $this->obj);
    }

    public function testExtendsGetProductSearchValuesBaseRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest', $this->obj);
    }
}
