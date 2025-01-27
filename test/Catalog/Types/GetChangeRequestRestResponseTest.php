<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Catalog\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Catalog\Types\GetChangeRequestRestResponse;

class GetChangeRequestRestResponseTest extends TestCase
{
    private GetChangeRequestRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetChangeRequestRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\GetChangeRequestRestResponse', $this->obj);
    }

    public function testExtendsChangeRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\ChangeRequest', $this->obj);
    }
}
