<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Merchandising\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Merchandising\Types\GetTopSellingProductsRequest;

class GetTopSellingProductsRequestTest extends TestCase
{
    private GetTopSellingProductsRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetTopSellingProductsRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\GetTopSellingProductsRequest', $this->obj);
    }

    public function testExtendsBaseMerchandisingServiceRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\BaseMerchandisingServiceRequest', $this->obj);
    }
}
