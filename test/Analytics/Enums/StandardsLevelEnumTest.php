<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Analytics\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Analytics\Enums\StandardsLevelEnum;

class StandardsLevelEnumTest extends TestCase
{
    private StandardsLevelEnum $obj;

    protected function setUp(): void
    {
        $this->obj = new StandardsLevelEnum();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Analytics\Enums\StandardsLevelEnum', $this->obj);
    }
}
