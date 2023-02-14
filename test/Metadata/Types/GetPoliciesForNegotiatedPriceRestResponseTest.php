<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Metadata\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse;

class GetPoliciesForNegotiatedPriceRestResponseTest extends TestCase
{
    private GetPoliciesForNegotiatedPriceRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetPoliciesForNegotiatedPriceRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse', $this->obj);
    }

    public function testExtendsNegotiatedPricePolicyResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\NegotiatedPricePolicyResponse', $this->obj);
    }
}
