<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Compliance\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Compliance\Types\GetListingViolationsRestRequest;

class GetListingViolationsRestRequestTest extends TestCase
{
    private GetListingViolationsRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetListingViolationsRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Compliance\Types\GetListingViolationsRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
