<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Metadata\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestResponse;

class GetSalesTaxJurisdictionsRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetSalesTaxJurisdictionsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestResponse', $this->obj);
    }

    public function testExtendsSalesTaxJurisdictions()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\SalesTaxJurisdictions', $this->obj);
    }
}
