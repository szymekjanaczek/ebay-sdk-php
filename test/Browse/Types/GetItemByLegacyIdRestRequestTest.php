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
use DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest;

class GetItemByLegacyIdRestRequestTest extends TestCase
{
    private GetItemByLegacyIdRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetItemByLegacyIdRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
