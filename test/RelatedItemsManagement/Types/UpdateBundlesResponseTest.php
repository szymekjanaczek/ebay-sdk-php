<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\RelatedItemsManagement\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesResponse;

class UpdateBundlesResponseTest extends TestCase
{
    private UpdateBundlesResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateBundlesResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesResponse', $this->obj);
    }

    public function testExtendsBaseResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\BaseResponse', $this->obj);
    }
}
