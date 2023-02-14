<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\HalfFinding\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\HalfFinding\Types\SortByType;

class SortByTypeTest extends TestCase
{
    private SortByType $obj;

    protected function setUp(): void
    {
        $this->obj = new SortByType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Types\SortByType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
