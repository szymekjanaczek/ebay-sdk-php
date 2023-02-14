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
use DTS\eBaySDK\Marketing\Types\GetListingsInSpecificPromotionRestRequest;

class GetListingsInSpecificPromotionRestRequestTest extends TestCase
{
    private GetListingsInSpecificPromotionRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetListingsInSpecificPromotionRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetListingsInSpecificPromotionRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
