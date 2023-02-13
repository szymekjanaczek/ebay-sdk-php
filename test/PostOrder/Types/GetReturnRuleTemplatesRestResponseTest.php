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
use DTS\eBaySDK\PostOrder\Types\GetReturnRuleTemplatesRestResponse;

class GetReturnRuleTemplatesRestResponseTest extends TestCase
{
    private GetReturnRuleTemplatesRestResponse $obj;

    protected function setUp(): void
    {
        $this->obj = new GetReturnRuleTemplatesRestResponse();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnRuleTemplatesRestResponse', $this->obj);
    }

    public function testExtendsGetDispositionRuleTemplatesResponse(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetDispositionRuleTemplatesResponse', $this->obj);
    }
}
