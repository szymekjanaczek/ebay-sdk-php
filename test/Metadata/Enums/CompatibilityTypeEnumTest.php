<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Metadata\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Metadata\Enums\CompatibilityTypeEnum;

class CompatibilityTypeEnumTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CompatibilityTypeEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Enums\CompatibilityTypeEnum', $this->obj);
    }
}
