<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType;

class ClassifiedAdBestOfferEnabledDefinitionTypeTest extends TestCase
{
    private ClassifiedAdBestOfferEnabledDefinitionType $obj;

    protected function setUp(): void
    {
        $this->obj = new ClassifiedAdBestOfferEnabledDefinitionType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\ClassifiedAdBestOfferEnabledDefinitionType', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
