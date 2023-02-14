<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\PostOrder\Enums\InquirySearchFieldGroupEnum;

class InquirySearchFieldGroupEnumTest extends TestCase
{
    private InquirySearchFieldGroupEnum $obj;

    protected function setUp(): void
    {
        $this->obj = new InquirySearchFieldGroupEnum();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Enums\InquirySearchFieldGroupEnum', $this->obj);
    }
}
