<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Marketing\Types\CreateAdsByInventoryReferenceRestResponse;

class CreateAdsByInventoryReferenceRestResponseTest extends TestCase
{
    private CreateAdsByInventoryReferenceRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateAdsByInventoryReferenceRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\CreateAdsByInventoryReferenceRestResponse', $this->obj);
    }

    public function testExtendsAdReferences(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\AdReferences', $this->obj);
    }
}
