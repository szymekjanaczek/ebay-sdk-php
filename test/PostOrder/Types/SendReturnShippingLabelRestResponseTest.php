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
use DTS\eBaySDK\PostOrder\Types\SendReturnShippingLabelRestResponse;

class SendReturnShippingLabelRestResponseTest extends TestCase
{
    private SendReturnShippingLabelRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new SendReturnShippingLabelRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SendReturnShippingLabelRestResponse', $this->obj);
    }

    public function testExtendsSendShippingLabelResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SendShippingLabelResponse', $this->obj);
    }
}
