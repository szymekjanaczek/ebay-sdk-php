<?php
namespace DTS\eBaySDK\Exceptions\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Exceptions\UnknownPropertyException;

class UnknownPropertyExceptionTest extends TestCase
{
    private UnknownPropertyException $obj;

    protected function setUp(): void
    {
        $this->obj = new UnknownPropertyException('foo');
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Exceptions\UnknownPropertyException', $this->obj);
    }

    public function testExtendsLogicException(): void
    {
        $this->assertInstanceOf('\LogicException', $this->obj);
    }

    public function testCorrectMessageIsGenerated(): void
    {
        $this->assertEquals('Unknown property foo', $this->obj->getMessage());
    }
}
