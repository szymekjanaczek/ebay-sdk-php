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
use DTS\eBaySDK\Finding\Types\Affiliate;

class AffiliateTest extends TestCase
{
    private Affiliate $obj;

    protected function setUp(): void
    {
        $this->obj = new Affiliate();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\Affiliate', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
