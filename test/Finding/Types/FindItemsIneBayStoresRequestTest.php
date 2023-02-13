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
use DTS\eBaySDK\Finding\Types\FindItemsIneBayStoresRequest;

class FindItemsIneBayStoresRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new FindItemsIneBayStoresRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\FindItemsIneBayStoresRequest', $this->obj);
    }

    public function testExtendsBaseFindingServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseFindingServiceRequest', $this->obj);
    }
}
