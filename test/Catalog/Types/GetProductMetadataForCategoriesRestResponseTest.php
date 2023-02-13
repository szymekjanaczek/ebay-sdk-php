<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Catalog\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestResponse;

class GetProductMetadataForCategoriesRestResponseTest extends TestCase
{
    private GetProductMetadataForCategoriesRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetProductMetadataForCategoriesRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestResponse', $this->obj);
    }

    public function testExtendsProductMetadataForCategories(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\ProductMetadataForCategories', $this->obj);
    }
}
