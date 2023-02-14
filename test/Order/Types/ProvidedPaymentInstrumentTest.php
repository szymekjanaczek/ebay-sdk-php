<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Order\Types;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Order\Types\ProvidedPaymentInstrument;

class ProvidedPaymentInstrumentTest extends TestCase
{
    private ProvidedPaymentInstrument $obj;

    protected function setUp(): void
    {
        $this->obj = new ProvidedPaymentInstrument();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\ProvidedPaymentInstrument', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
