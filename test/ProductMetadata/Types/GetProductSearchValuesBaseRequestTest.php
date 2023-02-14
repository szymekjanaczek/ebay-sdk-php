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
use DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest;

class GetProductSearchValuesBaseRequestTest extends TestCase
{
    private GetProductSearchValuesBaseRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetProductSearchValuesBaseRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\BaseServiceRequest', $this->obj);
    }
}
