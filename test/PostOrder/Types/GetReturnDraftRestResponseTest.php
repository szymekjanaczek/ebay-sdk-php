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
use DTS\eBaySDK\PostOrder\Types\GetReturnDraftRestResponse;

class GetReturnDraftRestResponseTest extends TestCase
{
    private GetReturnDraftRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetReturnDraftRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnDraftRestResponse', $this->obj);
    }

    public function testExtendsGetReturnCreationSessionResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnCreationSessionResponse', $this->obj);
    }
}
