<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BulkDataExchange\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\BulkDataExchange\Types\ErrorMessage;

class ErrorMessageTest extends TestCase
{
    private ErrorMessage $obj;

    protected function setUp(): void
    {
        $this->obj = new ErrorMessage();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\ErrorMessage', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
