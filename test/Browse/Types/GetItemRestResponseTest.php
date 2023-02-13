<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Browse\Types\GetItemRestResponse;

class GetItemRestResponseTest extends TestCase
{
    private GetItemRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetItemRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\GetItemRestResponse', $this->obj);
    }

    public function testExtendsItem(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\Item', $this->obj);
    }
}
