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
use DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest;

class AbortRecurringJobExecutionRequestTest extends TestCase
{
    private AbortRecurringJobExecutionRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new AbortRecurringJobExecutionRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }
}
