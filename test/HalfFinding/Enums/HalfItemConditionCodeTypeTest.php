<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\HalfFinding\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\HalfFinding\Enums\HalfItemConditionCodeType;

class HalfItemConditionCodeTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new HalfItemConditionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\HalfItemConditionCodeType', $this->obj);
    }
}
