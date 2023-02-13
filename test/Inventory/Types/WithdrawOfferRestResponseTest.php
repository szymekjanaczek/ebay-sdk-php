<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Inventory\Types\WithdrawOfferRestResponse;

class WithdrawOfferRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new WithdrawOfferRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\WithdrawOfferRestResponse', $this->obj);
    }

    public function testExtendsWithdrawResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\WithdrawResponse', $this->obj);
    }
}
