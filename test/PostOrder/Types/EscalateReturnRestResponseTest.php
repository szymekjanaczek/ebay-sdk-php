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
use DTS\eBaySDK\PostOrder\Types\EscalateReturnRestResponse;

class EscalateReturnRestResponseTest extends TestCase
{
    private EscalateReturnRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new EscalateReturnRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\EscalateReturnRestResponse', $this->obj);
    }

    public function testExtendsEscalateResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\EscalateResponse', $this->obj);
    }
}
