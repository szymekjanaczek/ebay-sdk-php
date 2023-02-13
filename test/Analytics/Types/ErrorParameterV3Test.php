<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Analytics\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Analytics\Types\ErrorParameterV3;

class ErrorParameterV3Test extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new ErrorParameterV3();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Analytics\Types\ErrorParameterV3', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
