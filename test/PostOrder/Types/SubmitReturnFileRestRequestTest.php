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
use DTS\eBaySDK\PostOrder\Types\SubmitReturnFileRestRequest;

class SubmitReturnFileRestRequestTest extends TestCase
{
    private SubmitReturnFileRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new SubmitReturnFileRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SubmitReturnFileRestRequest', $this->obj);
    }

    public function testExtendsSubmitFileRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SubmitFileRequest', $this->obj);
    }
}
