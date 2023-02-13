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
use DTS\eBaySDK\PostOrder\Types\SendInquiryMessageRestRequest;

class SendInquiryMessageRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new SendInquiryMessageRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SendInquiryMessageRestRequest', $this->obj);
    }

    public function testExtendsSendMessageRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SendMessageRequest', $this->obj);
    }
}
