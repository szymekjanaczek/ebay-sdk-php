<?php

namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Types\BaseType;

class BaseTypeTest extends TestCase
{
    private BaseType $obj;

    protected function setUp(): void
    {
        $this->obj = new BaseType();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
