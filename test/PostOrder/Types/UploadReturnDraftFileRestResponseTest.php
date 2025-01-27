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
use DTS\eBaySDK\PostOrder\Types\UploadReturnDraftFileRestResponse;

class UploadReturnDraftFileRestResponseTest extends TestCase
{
    private UploadReturnDraftFileRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new UploadReturnDraftFileRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UploadReturnDraftFileRestResponse', $this->obj);
    }

    public function testExtendsUploadFileResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\UploadFileResponse', $this->obj);
    }
}
