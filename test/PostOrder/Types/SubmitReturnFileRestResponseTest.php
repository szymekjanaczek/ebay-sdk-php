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
use DTS\eBaySDK\PostOrder\Types\SubmitReturnFileRestResponse;

class SubmitReturnFileRestResponseTest extends TestCase
{
    private SubmitReturnFileRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new SubmitReturnFileRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SubmitReturnFileRestResponse', $this->obj);
    }

    public function testExtendsSubmitFileResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SubmitFileResponse', $this->obj);
    }
}
