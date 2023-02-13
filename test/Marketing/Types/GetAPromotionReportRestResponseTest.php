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
use DTS\eBaySDK\Marketing\Types\GetAPromotionReportRestResponse;

class GetAPromotionReportRestResponseTest extends TestCase
{
    private GetAPromotionReportRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAPromotionReportRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetAPromotionReportRestResponse', $this->obj);
    }

    public function testExtendsPromotionsReportPagedCollection(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\PromotionsReportPagedCollection', $this->obj);
    }
}
