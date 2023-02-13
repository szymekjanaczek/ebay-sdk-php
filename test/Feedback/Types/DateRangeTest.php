<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Feedback\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Feedback\Types\DateRange;

class DateRangeTest extends TestCase
{
    private DateRange $obj;

    protected function setUp(): void
    {
        $this->obj = new DateRange();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Feedback\Types\DateRange', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
