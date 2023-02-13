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
use DTS\eBaySDK\Marketing\Types\DeleteAdsByInventoryReferenceRestResponse;

class DeleteAdsByInventoryReferenceRestResponseTest extends TestCase
{
    private DeleteAdsByInventoryReferenceRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new DeleteAdsByInventoryReferenceRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\DeleteAdsByInventoryReferenceRestResponse', $this->obj);
    }

    public function testExtendsAdIds(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\AdIds', $this->obj);
    }
}
