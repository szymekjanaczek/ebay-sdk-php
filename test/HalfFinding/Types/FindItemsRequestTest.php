<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\HalfFinding\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\HalfFinding\Types\FindItemsRequest;

class FindItemsRequestTest extends TestCase
{
    private FindItemsRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new FindItemsRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Types\FindItemsRequest', $this->obj);
    }

    public function testExtendsBaseRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Types\BaseRequest', $this->obj);
    }
}
