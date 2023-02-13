<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType;

class UploadSiteHostedPicturesResponseTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new UploadSiteHostedPicturesResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AbstractResponseType', $this->obj);
    }
}
