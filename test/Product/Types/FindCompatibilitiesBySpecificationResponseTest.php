<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Product\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationResponse;

class FindCompatibilitiesBySpecificationResponseTest extends TestCase
{
    private FindCompatibilitiesBySpecificationResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new FindCompatibilitiesBySpecificationResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Types\BaseServiceResponse', $this->obj);
    }
}
