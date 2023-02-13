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
use DTS\eBaySDK\Marketing\Types\CreateItemPromotionRestRequest;

class CreateItemPromotionRestRequestTest extends TestCase
{
    private CreateItemPromotionRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateItemPromotionRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\CreateItemPromotionRestRequest', $this->obj);
    }

    public function testExtendsItemPromotion(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\ItemPromotion', $this->obj);
    }
}
