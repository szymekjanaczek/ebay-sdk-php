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
use DTS\eBaySDK\Metadata\Types\NegotiatedPricePolicyResponse;

class NegotiatedPricePolicyResponseTest extends TestCase
{
    private NegotiatedPricePolicyResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new NegotiatedPricePolicyResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\NegotiatedPricePolicyResponse', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
