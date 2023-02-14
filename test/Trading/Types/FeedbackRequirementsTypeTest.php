<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Types\FeedbackRequirementsType;

class FeedbackRequirementsTypeTest extends TestCase
{
    private FeedbackRequirementsType $obj;

    protected function setUp(): void
    {
        $this->obj = new FeedbackRequirementsType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\FeedbackRequirementsType', $this->obj);
    }

    public function testExtendsBooleanType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BooleanType', $this->obj);
    }
}
