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
use DTS\eBaySDK\PostOrder\Types\ProcessReturnRequestRestRequest;

class ProcessReturnRequestRestRequestTest extends TestCase
{
    private ProcessReturnRequestRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new ProcessReturnRequestRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ProcessReturnRequestRestRequest', $this->obj);
    }

    public function testExtendsDecideReturnRequest(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\DecideReturnRequest', $this->obj);
    }
}
