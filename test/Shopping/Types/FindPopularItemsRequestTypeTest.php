<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Shopping\Types\FindPopularItemsRequestType;

class FindPopularItemsRequestTypeTest extends TestCase
{
    private FindPopularItemsRequestType $obj;

    protected function setUp(): void
    {
        $this->obj = new FindPopularItemsRequestType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\FindPopularItemsRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\AbstractRequestType', $this->obj);
    }
}
