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
use DTS\eBaySDK\PostOrder\Types\GetCancellationRestResponse;

class GetCancellationRestResponseTest extends TestCase
{
    private GetCancellationRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetCancellationRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetCancellationRestResponse', $this->obj);
    }

    public function testExtendsGetCancelDetailResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetCancelDetailResponse', $this->obj);
    }
}
