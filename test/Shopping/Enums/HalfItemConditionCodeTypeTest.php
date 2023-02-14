<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Shopping\Enums\HalfItemConditionCodeType;

class HalfItemConditionCodeTypeTest extends TestCase
{
    private HalfItemConditionCodeType $obj;

    protected function setUp(): void
    {
        $this->obj = new HalfItemConditionCodeType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\HalfItemConditionCodeType', $this->obj);
    }
}
