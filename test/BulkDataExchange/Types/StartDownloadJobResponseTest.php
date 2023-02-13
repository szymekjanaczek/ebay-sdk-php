<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BulkDataExchange\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse;

class StartDownloadJobResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new StartDownloadJobResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }
}
