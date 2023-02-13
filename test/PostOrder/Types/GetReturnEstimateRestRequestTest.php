<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\PostOrder\Types\GetReturnEstimateRestRequest;

class GetReturnEstimateRestRequestTest extends TestCase
{
    private GetReturnEstimateRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetReturnEstimateRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnEstimateRestRequest', $this->obj);
    }

    public function testExtendsGetEstimateRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetEstimateRequest', $this->obj);
    }
}
