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
use DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse;

class CreateUploadJobResponseTest extends TestCase
{
    private CreateUploadJobResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateUploadJobResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }
}
