<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BulkDataExchange\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\BulkDataExchange\Enums\FileType;

class FileTypeTest extends TestCase
{
    private FileType $obj;

    protected function setUp(): void
    {
        $this->obj = new FileType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\FileType', $this->obj);
    }
}
