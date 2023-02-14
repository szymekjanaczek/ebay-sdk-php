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
use DTS\eBaySDK\PostOrder\Types\GetReturnDraftRestRequest;

class GetReturnDraftRestRequestTest extends TestCase
{
    private GetReturnDraftRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetReturnDraftRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnDraftRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
