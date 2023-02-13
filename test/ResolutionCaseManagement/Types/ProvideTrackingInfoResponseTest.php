<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ResolutionCaseManagement\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoResponse;

class ProvideTrackingInfoResponseTest extends TestCase
{
    private ProvideTrackingInfoResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new ProvideTrackingInfoResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoResponse', $this->obj);
    }

    public function testExtendsBaseResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\BaseResponse', $this->obj);
    }
}
