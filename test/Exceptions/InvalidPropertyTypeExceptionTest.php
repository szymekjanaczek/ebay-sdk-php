<?php
namespace DTS\eBaySDK\Exceptions\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Exceptions\InvalidPropertyTypeException;

class InvalidPropertyTypeExceptionTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new InvalidPropertyTypeException('foo', 'string', 'integer');
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', $this->obj);
    }

    public function testExtendsLogicException()
    {
        $this->assertInstanceOf('\LogicException', $this->obj);
    }

    public function testCorrectMessageIsGenerated()
    {
        $this->assertEquals('Invalid property type provided for foo. Expected string but got integer', $this->obj->getMessage());
    }
}
