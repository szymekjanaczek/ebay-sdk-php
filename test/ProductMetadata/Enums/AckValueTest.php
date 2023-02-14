<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ProductMetadata\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ProductMetadata\Enums\AckValue;

class AckValueTest extends TestCase
{
    private AckValue $obj;

    protected function setUp(): void
    {
        $this->obj = new AckValue();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Enums\AckValue', $this->obj);
    }
}
