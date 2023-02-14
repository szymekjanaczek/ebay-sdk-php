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
use DTS\eBaySDK\PostOrder\Types\IssueReturnRefundRestResponse;

class IssueReturnRefundRestResponseTest extends TestCase
{
    private IssueReturnRefundRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new IssueReturnRefundRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\IssueReturnRefundRestResponse', $this->obj);
    }

    public function testExtendsIssueRefundResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\IssueRefundResponse', $this->obj);
    }
}
