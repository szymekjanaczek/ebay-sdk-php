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
use DTS\eBaySDK\PostOrder\Types\GetReturnDraftFilesRestResponse;

class GetReturnDraftFilesRestResponseTest extends TestCase
{
    private GetReturnDraftFilesRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetReturnDraftFilesRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnDraftFilesRestResponse', $this->obj);
    }

    public function testExtendsGetFileResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetFileResponse', $this->obj);
    }
}
