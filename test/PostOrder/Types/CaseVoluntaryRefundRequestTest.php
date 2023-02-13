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
use DTS\eBaySDK\PostOrder\Types\CaseVoluntaryRefundRequest;

class CaseVoluntaryRefundRequestTest extends TestCase
{
    private CaseVoluntaryRefundRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new CaseVoluntaryRefundRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CaseVoluntaryRefundRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
