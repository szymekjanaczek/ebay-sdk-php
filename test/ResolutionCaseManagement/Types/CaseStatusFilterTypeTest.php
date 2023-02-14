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
use DTS\eBaySDK\ResolutionCaseManagement\Types\CaseStatusFilterType;

class CaseStatusFilterTypeTest extends TestCase
{
    private CaseStatusFilterType $obj;

    protected function setUp(): void
    {
        $this->obj = new CaseStatusFilterType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\CaseStatusFilterType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
