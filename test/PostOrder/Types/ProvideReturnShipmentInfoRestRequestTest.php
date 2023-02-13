<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\PostOrder\Types\ProvideReturnShipmentInfoRestRequest;

class ProvideReturnShipmentInfoRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new ProvideReturnShipmentInfoRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ProvideReturnShipmentInfoRestRequest', $this->obj);
    }

    public function testExtendsProvideShipmentInfoRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ProvideShipmentInfoRequest', $this->obj);
    }
}
