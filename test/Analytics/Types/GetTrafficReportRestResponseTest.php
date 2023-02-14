<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Analytics\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Analytics\Types\GetTrafficReportRestResponse;

class GetTrafficReportRestResponseTest extends TestCase
{
    private GetTrafficReportRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetTrafficReportRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Analytics\Types\GetTrafficReportRestResponse', $this->obj);
    }

    public function testExtendsReport(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Analytics\Types\Report', $this->obj);
    }
}
