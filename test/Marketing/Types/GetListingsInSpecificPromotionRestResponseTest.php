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
use DTS\eBaySDK\Marketing\Types\GetListingsInSpecificPromotionRestResponse;

class GetListingsInSpecificPromotionRestResponseTest extends TestCase
{
    private GetListingsInSpecificPromotionRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetListingsInSpecificPromotionRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetListingsInSpecificPromotionRestResponse', $this->obj);
    }

    public function testExtendsItemsPagedCollection(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\ItemsPagedCollection', $this->obj);
    }
}
