<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Taxonomy\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Taxonomy\Types\ErrorDetailV3;

class ErrorDetailV3Test extends TestCase
{
    private ErrorDetailV3 $obj;

    protected function setUp(): void
    {
        $this->obj = new ErrorDetailV3();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Types\ErrorDetailV3', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
