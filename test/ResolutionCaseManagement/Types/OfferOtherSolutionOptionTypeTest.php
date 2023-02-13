<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ResolutionCaseManagement\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionOptionType;

class OfferOtherSolutionOptionTypeTest extends TestCase
{
    private OfferOtherSolutionOptionType $obj;

    protected function setUp(): void
    {
        $this->obj = new OfferOtherSolutionOptionType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionOptionType', $this->obj);
    }

    public function testExtendsBaseActivityOptionType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\BaseActivityOptionType', $this->obj);
    }
}
