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
use DTS\eBaySDK\Catalog\Types\GetProductRestRequest;

class GetProductRestRequestTest extends TestCase
{
    private GetProductRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetProductRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\GetProductRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
