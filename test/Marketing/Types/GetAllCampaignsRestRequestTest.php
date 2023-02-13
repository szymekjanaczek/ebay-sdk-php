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
use DTS\eBaySDK\Marketing\Types\GetAllCampaignsRestRequest;

class GetAllCampaignsRestRequestTest extends TestCase
{
    private GetAllCampaignsRestRequest $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAllCampaignsRestRequest();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetAllCampaignsRestRequest', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
