<?php

namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DateTime;
use DateTimeZone;
use stdClass;
use DTS\eBaySDK\Test\Mocks\SimpleClass;
use DTS\eBaySDK\Test\Mocks\Base64BinaryType;
use DTS\eBaySDK\Test\Mocks\BooleanType;
use DTS\eBaySDK\Test\Mocks\DecimalType;
use DTS\eBaySDK\Test\Mocks\DoubleType;
use DTS\eBaySDK\Test\Mocks\IntegerType;
use DTS\eBaySDK\Test\Mocks\StringType;
use DTS\eBaySDK\Test\Mocks\TokenType;
use DTS\eBaySDK\Test\Mocks\URIType;

class SimpleClassTest extends TestCase
{
    private SimpleClass $obj;

    protected function setUp(): void
    {
        $this->obj = new SimpleClass();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\SimpleClass', $this->obj);
    }

    public function testExtendsBaseType(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testGettingSettingProperties(): void
    {
        $this->obj->integer = 123;
        $this->assertEquals(123, $this->obj->integer);
        $this->assertisInt($this->obj->integer);

        $this->obj->string = 'foo';
        $this->assertEquals('foo', $this->obj->string);
        $this->assertisString($this->obj->string);

        $this->obj->double = 123.45;
        $this->assertEquals(123.45, $this->obj->double);
        $this->assertisFloat($this->obj->double);

        $this->obj->booleanTrue = true;
        $this->assertEquals(true, $this->obj->booleanTrue);
        $this->assertisBool($this->obj->booleanTrue);

        $this->obj->booleanFalse = false;
        $this->assertEquals(false, $this->obj->booleanFalse);
        $this->assertisBool($this->obj->booleanFalse);

        $date = new DateTime('2000-01-01', new DateTimeZone('UTC'));
        $this->obj->DateTime = $date;
        $this->assertEquals($date, $this->obj->DateTime);
        $this->assertInstanceOf('\DateTime', $this->obj->DateTime);

        $simpleClass = new SimpleClass();
        $this->obj->SimpleClass = $simpleClass;
        $this->assertEquals($simpleClass, $this->obj->SimpleClass);
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\SimpleClass', $this->obj->SimpleClass);

        $this->assertEquals(0, count($this->obj->strings));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->strings);

        $this->obj->strings[] = 'foo';
        $this->obj->strings[] = 'bar';
        $this->assertEquals(2, count($this->obj->strings));
        $this->assertEquals('foo', $this->obj->strings[0]);
        $this->assertEquals('bar', $this->obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->strings);

        $this->obj->strings = ['foo', 'bar'];
        $this->assertEquals(2, count($this->obj->strings));
        $this->assertEquals('foo', $this->obj->strings[0]);
        $this->assertEquals('bar', $this->obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->strings);

        $this->obj->strings = [];
        $this->assertEquals(0, count($this->obj->strings));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->strings);

        $this->obj->integers[] = 111;
        $this->obj->integers[] = 222;
        $this->assertEquals(2, count($this->obj->integers));
        $this->assertEquals(111, $this->obj->integers[0]);
        $this->assertEquals(222, $this->obj->integers[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->integers);

        $this->obj->integers = [111, 222];
        $this->assertEquals(2, count($this->obj->integers));
        $this->assertEquals(111, $this->obj->integers[0]);
        $this->assertEquals(222, $this->obj->integers[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->integers);

        $this->obj->integers = [];
        $this->assertEquals(0, count($this->obj->integers));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->integers);

        $this->obj->base64BinaryType = new Base64BinaryType();
        $this->obj->base64BinaryType->value = 'binary type';
        $this->assertEquals('binary type', $this->obj->base64BinaryType->value);

        $this->obj->booleanType = new BooleanType();
        $this->obj->booleanType->value = true;
        $this->assertEquals(true, $this->obj->booleanType->value);

        $this->obj->decimalType = new DecimalType();
        $this->obj->decimalType->value = 123;
        $this->assertEquals(123, $this->obj->decimalType->value);

        $this->obj->doubleType = new DoubleType();
        $this->obj->doubleType->value = 123.34;
        $this->assertEquals(123.34, $this->obj->doubleType->value);

        $this->obj->integerType = new IntegerType();
        $this->obj->integerType->value = 123;
        $this->assertEquals(123, $this->obj->integerType->value);

        $this->obj->stringType = new StringType();
        $this->obj->stringType->value = 'string type';
        $this->assertEquals('string type', $this->obj->stringType->value);

        $this->obj->tokenType = new TokenType();
        $this->obj->tokenType->value = 'token type';
        $this->assertEquals('token type', $this->obj->tokenType->value);

        $this->obj->uriType = new URIType();
        $this->obj->uriType->value = 'uri type';
        $this->assertEquals('uri type', $this->obj->uriType->value);

        $this->obj->anyType = 1;
        $this->assertEquals(1, $this->obj->anyType);
        $this->obj->anyType = 'foo';
        $this->assertEquals('foo', $this->obj->anyType);
        $this->obj->anyType = 1.23;
        $this->assertEquals(1.23, $this->obj->anyType);
        $this->obj->anyType = true;
        $this->assertEquals(true, $this->obj->anyType);
        $this->obj->anyType = false;
        $this->assertEquals(false, $this->obj->anyType);
        $date = new DateTime('2000-01-01', new DateTimeZone('UTC'));
        $this->obj->anyType = $date;
        $this->assertEquals($date, $this->obj->anyType);
        $this->obj->anyType = [1, 2, 3];
        $this->assertEquals([1, 2, 3], $this->obj->anyType);

        $this->assertEquals(0, count($this->obj->anyTypes));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $this->obj->anyTypes);
        $this->obj->anyTypes[] = 1;
        $this->obj->anyTypes[] = 'foo';
        $this->obj->anyTypes[] = 1.23;
        $this->obj->anyTypes[] = true;
        $this->obj->anyTypes[] = false;
        $date = new DateTime('2000-01-01', new DateTimeZone('UTC'));
        $this->obj->anyTypes[] = $date;
        $this->obj->anyTypes[] = [1, 2, 3];
        $this->assertEquals(7, count($this->obj->anyTypes));
        $this->assertEquals(1, $this->obj->anyTypes[0]);
        $this->assertEquals('foo', $this->obj->anyTypes[1]);
        $this->assertEquals(1.23, $this->obj->anyTypes[2]);
        $this->assertEquals(true, $this->obj->anyTypes[3]);
        $this->assertEquals(false, $this->obj->anyTypes[4]);
        $this->assertEquals($date, $this->obj->anyTypes[5]);
        $this->assertEquals([1, 2, 3], $this->obj->anyTypes[6]);
    }

    public function testIsSet(): void
    {
        $this->obj->string = 'foo';
        $this->assertEquals(true, isset($this->obj->string));
    }

    public function testUnSet(): void
    {
        $this->obj->string = 'foo';
        unset($this->obj->string);
        $this->assertEquals(false, isset($this->obj->string));
    }

    public function testGettingNonExistentProperty(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property foo');

        $this->obj->foo;
    }

    public function testSettingNonExistentProperty(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property foo');

        $this->obj->foo = 'foo';
    }

    public function testSettingPropertyWithAnInvalidType(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type provided for integer. Expected integer but got string');

        $this->obj->integer = 'foo';
    }

    public function testIsSetNonExistentProperty(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property foo');

        isset($this->obj->foo);
    }

    public function testUnSetNonExistentProperty(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property foo');

        isset($this->obj->foo);
    }

    public function testSettingRepeatablePropertyWithAnInvalidType(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type provided for integers. Expected integer but got string');

        $this->obj->integers[] = 'foo';
    }

    public function testSettingRepeatablePropertyWithOneInvalidType(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type provided for integers. Expected integer but got string');

        $this->obj->integers = [123, 'foo'];
    }

    public function testSettingRepeatablePropertyDirectly(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type provided for integers. Expected DTS\eBaySDK\Types\RepeatableType but got integer');

        $this->obj->integers = 123;
    }

    public function testCanGetElementMeta(): void
    {
        $meta = new stdClass();
        $meta->propertyName = 'SimpleClass';
        $meta->phpType = 'DTS\eBaySDK\Test\Mocks\SimpleClass';
        $meta->repeatable = false;
        $meta->attribute = false;
        $meta->elementName = 'SimpleClass';
        $meta->strData = '';

        $this->assertEquals($meta, $this->obj->elementMeta('SimpleClass'));
    }
}
