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
use DTS\eBaySDK\Trading\Types\SetSellingManagerItemAutomationRuleResponseType;

class SetSellingManagerItemAutomationRuleResponseTypeTest extends TestCase
{
    private SetSellingManagerItemAutomationRuleResponseType $obj;

    protected function setUp(): void
    {
        $this->obj = new SetSellingManagerItemAutomationRuleResponseType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\SetSellingManagerItemAutomationRuleResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
