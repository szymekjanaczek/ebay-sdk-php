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
use DTS\eBaySDK\PostOrder\Types\CreateReturnDraftRestResponse;

class CreateReturnDraftRestResponseTest extends TestCase
{
    private CreateReturnDraftRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateReturnDraftRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateReturnDraftRestResponse', $this->obj);
    }

    public function testExtendsSetReturnCreationSessionResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SetReturnCreationSessionResponse', $this->obj);
    }
}
