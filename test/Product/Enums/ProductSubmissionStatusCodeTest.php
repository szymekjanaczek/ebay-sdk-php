<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Product\Enums;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Product\Enums\ProductSubmissionStatusCode;

class ProductSubmissionStatusCodeTest extends TestCase
{
    private ProductSubmissionStatusCode $obj;

    protected function setUp(): void
    {
        $this->obj = new ProductSubmissionStatusCode();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Enums\ProductSubmissionStatusCode', $this->obj);
    }
}
