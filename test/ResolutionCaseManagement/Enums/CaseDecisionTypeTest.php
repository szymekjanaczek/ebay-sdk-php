<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ResolutionCaseManagement\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseDecisionType;

class CaseDecisionTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CaseDecisionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseDecisionType', $this->obj);
    }
}
