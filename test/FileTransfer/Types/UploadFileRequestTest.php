<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\FileTransfer\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\FileTransfer\Types\UploadFileRequest;

class UploadFileRequestTest extends TestCase
{
    private UploadFileRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new UploadFileRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\UploadFileRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\BaseServiceRequest', $this->obj);
    }
}
