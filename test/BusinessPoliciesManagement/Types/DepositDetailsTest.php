<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BusinessPoliciesManagement\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\BusinessPoliciesManagement\Types\DepositDetails;

class DepositDetailsTest extends TestCase
{
    private DepositDetails $obj;

    protected function setUp(): void
    {
        $this->obj = new DepositDetails();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\DepositDetails', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
