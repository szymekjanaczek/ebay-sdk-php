<?php
namespace DTS\eBaySDK\Types;

use ArrayAccess;
use Countable;
use Iterator;
use DTS\eBaySDK\Exceptions\InvalidPropertyTypeException;
use function DTS\eBaySDK\checkPropertyType;
use \DTS\eBaySDK\Exceptions;
use \DTS\eBaySDK\JmesPath\JmesPathableArrayInterface;
use ReturnTypeWillChange;

/**
 * Class to handle XML elements that are repeatable.
 *
 * Allows properties in an object to be treated as an array.
 */
class RepeatableType implements ArrayAccess, Countable, Iterator, JmesPathableArrayInterface
{
    /**
     * @var array The data to store as an array.
     */
    private array $data = [];

    /**
     * @var int The current position in the array.
     */
    private int $position = 0;

    /**
     * @var string The name of the class that the property is a member of.
     */
    private string $class;

    /**
     * @var string The name of the property that acts like an array.
     */
    private string $property;

    /**
     * @var string The type that values assigned to the array should be.
     */
    private string $expectedType;

    /**
     *
     * @param string $class The name of the class that the property is a member of.
     * @param string $property The name of the property that acts like an array.
     * @param string $expectedType The type that values assigned to the array should be.
     */
    public function __construct(string $class, string $property, string $expectedType)
    {
        $this->class = $class;
        $this->property = $property;
        $this->expectedType = $expectedType;
    }

    /**
     * Determines if the offset exists in the array.
     *
     * @param int $offset The array index to check.
     *
     * @return bool Returns if the offset exists in the array.
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    /**
     * Returns the value of the given offset.
     *
     * @param int $offset The array index.
     *
     * @return mixed Returns the value for the given offset or null if it doesn't exist.
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->offsetExists($offset) ? $this->data[$offset] : null;
    }

    /**
     * Sets a value for the given offset.
     *
     * @param mixed $offset The array index or null to add the value to the end of the array.
     * @param mixed $value The value to add.
     *
     * @throws InvalidPropertyTypeException If the value is the wrong type for the array.
     */
    /**
     * Sets a value for the given offset.
     *
     * @param mixed $offset The array index or null to add the value to the end of the array.
     * @param mixed $value The value to add.
     *
     * @throws InvalidPropertyTypeException If the value is the wrong type for the array.
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value): void
    {
        self::ensurePropertyType($value);

        if (is_null($offset)) {
            $this->data[] = $value;
        } else {
            $this->data[$offset] = $value;
        }
    }

    /**
     * Unsets the value of the given offset.
     *
     * @param int $offset The array index.
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }

    /**
     * @return int The number of array items.
     */
    #[ReturnTypeWillChange]
    public function count(): int
    {
        return count($this->data);
    }

    /**
     * @return mixed The value of the current array index.
     */
    #[ReturnTypeWillChange]
    public function current(): mixed
    {
        return $this->offsetGet($this->position);
    }

    /**
     * @return int The current array index.
     */
    #[ReturnTypeWillChange]
    public function key(): mixed
    {
        return $this->position;
    }

    /**
     * Move onto the next array index.
     */
    #[ReturnTypeWillChange]
    public function next(): void
    {
        $this->position++;
    }

    /**
     * Reset the array index to the start of the array.
     */
    #[ReturnTypeWillChange]
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * @return bool Return if the current array index is valid.
     */
    #[ReturnTypeWillChange]
    public function valid(): bool
    {
        return $this->offsetExists($this->position);
    }

    /**
     * Determines if the value is the correct type to assign to the array.
     *
     * @param mixed $value The value to check the type of.
     *
     * @throws InvalidPropertyTypeException If the value is the wrong type for the array.
     */
    private function ensurePropertyType($value)
    {
        $actualType = gettype($value);
        if ('object' === $actualType) {
            $actualType = get_class($value);
        }

        $valid = explode('|', $this->expectedType);
        $isValid = false;
        foreach ($valid as $check) {
            if ($check !== 'any' && checkPropertyType($check)) {
                if ($check === $actualType) {
                    return;
                }

                $isValid = false;
            } else {
                $isValid = true;
            }
        }

        if (!$isValid) {
            throw new InvalidPropertyTypeException($this->property, $this->expectedType, $actualType);
        }
    }
}
