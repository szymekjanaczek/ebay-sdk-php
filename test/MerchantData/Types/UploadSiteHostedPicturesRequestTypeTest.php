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
use DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesRequestType;

class UploadSiteHostedPicturesRequestTypeTest extends TestCase
{
    private UploadSiteHostedPicturesRequestType $obj;

    protected function setUp(): void
    {
        $this->obj = new UploadSiteHostedPicturesRequestType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AbstractRequestType', $this->obj);
    }
}
