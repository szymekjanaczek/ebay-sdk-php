<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Marketing\Types\GetMetadataForAllReportsRestResponse;

class GetMetadataForAllReportsRestResponseTest extends TestCase
{
    private GetMetadataForAllReportsRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetMetadataForAllReportsRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetMetadataForAllReportsRestResponse', $this->obj);
    }

    public function testExtendsReportMetadatas(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\ReportMetadatas', $this->obj);
    }
}
