<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Taxonomy\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Taxonomy\Types\CategorySuggestionResponse;

class CategorySuggestionResponseTest extends TestCase
{
    private CategorySuggestionResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new CategorySuggestionResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Types\CategorySuggestionResponse', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
