<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Finding\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Finding\Types\ConditionHistogramContainer;

class ConditionHistogramContainerTest extends TestCase
{
    private ConditionHistogramContainer $obj;

    protected function setUp(): void
    {
        $this->obj = new ConditionHistogramContainer();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\ConditionHistogramContainer', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
