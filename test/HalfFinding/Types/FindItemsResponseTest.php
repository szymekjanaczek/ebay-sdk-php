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
use DTS\eBaySDK\HalfFinding\Types\FindItemsResponse;

class FindItemsResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new FindItemsResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Types\FindItemsResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Types\BaseResponse', $this->obj);
    }
}
