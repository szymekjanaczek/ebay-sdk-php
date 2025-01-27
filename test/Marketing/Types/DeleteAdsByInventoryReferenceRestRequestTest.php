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
use DTS\eBaySDK\Marketing\Types\DeleteAdsByInventoryReferenceRestRequest;

class DeleteAdsByInventoryReferenceRestRequestTest extends TestCase
{
    private DeleteAdsByInventoryReferenceRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new DeleteAdsByInventoryReferenceRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\DeleteAdsByInventoryReferenceRestRequest', $this->obj);
    }

    public function testExtendsDeleteAdsByInventoryReferenceRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\DeleteAdsByInventoryReferenceRequest', $this->obj);
    }
}
