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
use DTS\eBaySDK\ResolutionCaseManagement\Enums\PaypalSNADCaseStatusType;

class PaypalSNADCaseStatusTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new PaypalSNADCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\PaypalSNADCaseStatusType', $this->obj);
    }
}
