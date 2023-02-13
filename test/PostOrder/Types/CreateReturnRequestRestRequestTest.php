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
use DTS\eBaySDK\PostOrder\Types\CreateReturnRequestRestRequest;

class CreateReturnRequestRestRequestTest extends TestCase
{
    private CreateReturnRequestRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateReturnRequestRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateReturnRequestRestRequest', $this->obj);
    }

    public function testExtendsCreateReturnRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateReturnRequest', $this->obj);
    }
}
