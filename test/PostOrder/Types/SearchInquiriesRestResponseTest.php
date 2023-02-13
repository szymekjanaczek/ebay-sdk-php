<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\PostOrder\Types\SearchInquiriesRestResponse;

class SearchInquiriesRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new SearchInquiriesRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SearchInquiriesRestResponse', $this->obj);
    }

    public function testExtendsInquirySearchResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\InquirySearchResponse', $this->obj);
    }
}
