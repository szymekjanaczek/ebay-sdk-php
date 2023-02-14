<?php

/**
 * Copyright (c) 2014 Michael Dowling, https://github.com/mtdowling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace DTS\eBaySDK\JmesPath;

use RuntimeException;
use JsonSerializable;

/**
 * Dispatches to named JMESPath functions using a single function that has the
 * following signature:
 *
 *     mixed $result = fn(string $function_name, array $args)
 */
class FnDispatcher
{
    /**
     * Gets a cached instance of the default function implementations.
     *
     * @return FnDispatcher
     */
    public static function getInstance()
    {
        static $instance = null;
        if (!$instance) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * @param string $fn   Function name.
     * @param array  $args Function arguments.
     *
     * @return mixed
     */
    public function __invoke($fn, array $args)
    {
        return $this->{'fn_' . $fn}($args);
    }

    private function fn_abs(array $args): int|float
    {
        $this->validate('abs', $args, [['number']]);
        return abs($args[0]);
    }

    private function fn_avg(array $args)
    {
        $this->validate('avg', $args, [['array']]);
        $arg = Utils::toArray($args[0]);
        $sum = $this->reduce('avg:0', $arg, ['number'], static function ($a, $b): float|int|array {
            return $a + $b;
        });
        return $arg ? ($sum / count($arg)) : null;
    }

    private function fn_ceil(array $args): float
    {
        $this->validate('ceil', $args, [['number']]);
        return ceil($args[0]);
    }

    private function fn_contains(array $args)
    {
        $this->validate('contains', $args, [['string', 'array'], ['any']]);
        $arg = Utils::toArray($args[0]);
        if (is_array($arg)) {
            return in_array($args[1], $arg);
        } elseif (is_string($args[1])) {
            return strpos($arg, $args[1]) !== false;
        } else {
            return null;
        }
    }

    private function fn_ends_with(array $args): bool
    {
        $this->validate('ends_with', $args, [['string'], ['string']]);
        list($search, $suffix) = $args;
        return $suffix === '' || substr($search, -strlen($suffix)) === $suffix;
    }

    private function fn_floor(array $args): float
    {
        $this->validate('floor', $args, [['number']]);
        return floor($args[0]);
    }

    private function fn_not_null(array $args)
    {
        if ($args === []) {
            throw new RuntimeException(
                "not_null() expects 1 or more arguments, 0 were provided"
            );
        }

        return array_reduce($args, static function ($carry, $item) {
            return $carry !== null ? $carry : $item;
        });
    }

    private function fn_join(array $args)
    {
        $this->validate('join', $args, [['string'], ['array']]);
        $fn = static function ($a, $b, $i) use ($args) {
            return $i ? ($a . $args[0] . $b) : $b;
        };
        return $this->reduce('join:0', Utils::toArray($args[1]), ['string'], $fn);
    }

    private function fn_keys(array $args): array
    {
        $this->validate('keys', $args, [['object']]);
        return array_keys((array) Utils::toArray($args[0]));
    }

    private function fn_length(array $args)
    {
        $this->validate('length', $args, [['string', 'array', 'object']]);
        $arg = Utils::toArray($args[0]);
        return is_string($arg) ? strlen($arg) : count((array) $arg);
    }

    private function fn_max(array $args)
    {
        $this->validate('max', $args, [['array']]);
        $fn = static function ($a, $b) {
            return $a >= $b ? $a : $b;
        };
        return $this->reduce('max:0', Utils::toArray($args[0]), ['number', 'string'], $fn);
    }

    private function fn_max_by(array $args)
    {
        $this->validate('max_by', $args, [['array'], ['expression']]);
        $expr = $this->wrapExpression('max_by:1', $args[1], ['number', 'string']);
        $fn = static function ($carry, $item, $index) use ($expr) {
            return $index
                ? ($expr($carry) >= $expr($item) ? $carry : $item)
                : $item;
        };
        return $this->reduce('max_by:1', Utils::toArray($args[0]), ['any'], $fn);
    }

    private function fn_min(array $args)
    {
        $this->validate('min', $args, [['array']]);
        $fn = static function ($a, $b, $i) {
            return $i && $a <= $b ? $a : $b;
        };
        return $this->reduce('min:0', Utils::toArray($args[0]), ['number', 'string'], $fn);
    }

    private function fn_min_by(array $args)
    {
        $this->validate('min_by', $args, [['array'], ['expression']]);
        $expr = $this->wrapExpression('min_by:1', $args[1], ['number', 'string']);
        $i = -1;
        $fn = static function ($a, $b) use ($expr, &$i) {
            return ++$i !== 0 ? ($expr($a) <= $expr($b) ? $a : $b) : $b;
        };
        return $this->reduce('min_by:1', Utils::toArray($args[0]), ['any'], $fn);
    }

    private function fn_reverse(array $args)
    {
        $this->validate('reverse', $args, [['array', 'string']]);
        $arg = Utils::toArray($args[0]);
        if (is_array($arg)) {
            return array_reverse($arg);
        } elseif (is_string($arg)) {
            return strrev($arg);
        } else {
            throw new RuntimeException('Cannot reverse provided argument');
        }
    }

    private function fn_sum(array $args)
    {
        $this->validate('sum', $args, [['array']]);
        $fn = static function ($a, $b): float|int|array {
            return $a + $b;
        };
        return $this->reduce('sum:0', Utils::toArray($args[0]), ['number'], $fn);
    }

    private function fn_sort(array $args): array|int
    {
        $this->validate('sort', $args, [['array']]);
        $valid = ['string', 'number'];
        return Utils::stableSort(Utils::toArray($args[0]), function ($a, $b) use ($valid): int {
            $this->validateSeq('sort:0', $valid, $a, $b);
            return strnatcmp($a, $b);
        });
    }

    private function fn_sort_by(array $args): array|int
    {
        $this->validate('sort_by', $args, [['array'], ['expression']]);
        $expr = $args[1];
        $valid = ['string', 'number'];
        return Utils::stableSort(
            Utils::toArray($args[0]),
            function ($a, $b) use ($expr, $valid): int {
                $va = $expr($a);
                $vb = $expr($b);
                $this->validateSeq('sort_by:0', $valid, $va, $vb);
                return strnatcmp($va, $vb);
            }
        );
    }

    private function fn_starts_with(array $args): bool
    {
        $this->validate('starts_with', $args, [['string'], ['string']]);
        list($search, $prefix) = $args;
        return $prefix === '' || strpos($search, $prefix) === 0;
    }

    private function fn_type(array $args)
    {
        $this->validateArity('type', count($args), 1);
        return Utils::type($args[0]);
    }

    private function fn_to_string(array $args)
    {
        $this->validateArity('to_string', count($args), 1);
        $v = $args[0];
        if (is_string($v)) {
            return $v;
        } elseif (
            is_object($v)
            && !($v instanceof JsonSerializable)
            && method_exists($v, '__toString')
        ) {
            return (string) $v;
        } elseif (Utils::isArray($v)) {
            $v = Utils::toArray($v);
        }

        return json_encode($v);
    }

    private function fn_to_number(array $args)
    {
        $this->validateArity('to_number', count($args), 1);
        $value = $args[0];
        $type = Utils::type($value);
        if ($type == 'number') {
            return $value;
        } elseif ($type == 'string' && is_numeric($value)) {
            return strpos($value, '.') ? (float) $value : (int) $value;
        } else {
            return null;
        }
    }

    private function fn_values(array $args): array
    {
        $this->validate('values', $args, [['array', 'object']]);
        return array_values((array) Utils::toArray($args[0]));
    }

    private function fn_merge(array $args): array
    {
        if ($args === []) {
            throw new RuntimeException(
                "merge() expects 1 or more arguments, 0 were provided"
            );
        }

        return array_reduce($args, static function ($carry, $arg): array {
            $carry = array_replace($carry, Utils::toArray($arg));
            return $carry;
        }, []);
    }

    private function fn_to_array(array $args)
    {
        $this->validate('to_array', $args, [['any']]);

        return Utils::isArray($args[0]) ? Utils::toArray($args[0]) : [$args[0]];
    }

    /**
     * @return mixed[]
     */
    private function fn_map(array $args): array
    {
        $this->validate('map', $args, [['expression'], ['any']]);
        $result = [];
        foreach ($args[1] as $a) {
            $result[] = $args[0]($a);
        }

        return $result;
    }

    private function typeError(string $from, string $msg)
    {
        if (strpos($from, ':')) {
            list($fn, $pos) = explode(':', $from);
            throw new RuntimeException(
                sprintf('Argument %d of %s %s', $pos, $fn, $msg)
            );
        } else {
            throw new RuntimeException(
                sprintf('Type error: %s %s', $from, $msg)
            );
        }
    }

    private function validateArity(string $from, int $given, int $expected)
    {
        if ($given != $expected) {
            $err = "%s() expects {$expected} arguments, {$given} were provided";
            throw new RuntimeException(sprintf($err, $from));
        }
    }

    private function validate(string $from, array $args, array $types = []): void
    {
        $this->validateArity($from, count($args), count($types));
        foreach ($args as $index => $value) {
            if (!isset($types[$index]) || !$types[$index]) {
                continue;
            }

            $this->validateType("{$from}:{$index}", $value, $types[$index]);
        }
    }

    private function validateType(string $from, $value, array $types): void
    {
        if (
            $types[0] == 'any'
            || in_array(Utils::type($value), $types)
            || ($value === [] && in_array('object', $types))
        ) {
            return;
        }

        $msg = 'must be one of the following types: ' . implode(', ', $types)
            . '. ' . Utils::type($value) . ' found';
        $this->typeError($from, $msg);
    }

    /**
     * Validates value A and B, ensures they both are correctly typed, and of
     * the same type.
     *
     * @param string   $from   String of function:argument_position
     * @param array    $types  Array of valid value types.
     * @param mixed    $a      Value A
     * @param mixed    $b      Value B
     */
    private function validateSeq(string $from, array $types, $a, $b): void
    {
        $ta = Utils::type($a);
        $tb = Utils::type($b);

        if ($ta !== $tb) {
            $msg = "encountered a type mismatch in sequence: {$ta}, {$tb}";
            $this->typeError($from, $msg);
        }

        $typeMatch = ($types && $types[0] == 'any') || in_array($ta, $types);
        if (!$typeMatch) {
            $msg = 'encountered a type error in sequence. The argument must be '
                . 'an array of ' . implode('|', $types) . ' types. '
                . "Found {$ta}, {$tb}.";
            $this->typeError($from, $msg);
        }
    }

    /**
     * Reduces and validates an array of values to a single value using a fn.
     *
     * @param string   $from   String of function:argument_position
     * @param array    $values Values to reduce.
     * @param array    $types  Array of valid value types.
     * @param callable $reduce Reduce function that accepts ($carry, $item).
     *
     * @return mixed
     */
    private function reduce(string $from, array $values, array $types, callable $reduce)
    {
        $i = -1;
        return array_reduce(
            $values,
            function ($carry, $item) use ($from, $types, $reduce, &$i) {
                if (++$i > 0) {
                    $this->validateSeq($from, $types, $carry, $item);
                }

                return $reduce($carry, $item, $i);
            }
        );
    }

    /**
     * Validates the return values of expressions as they are applied.
     *
     * @param string   $from  Function name : position
     * @param callable $expr  Expression function to validate.
     * @param array    $types Array of acceptable return type values.
     *
     * @return callable Returns a wrapped function
     */
    private function wrapExpression(string $from, callable $expr, array $types)
    {
        list($fn, $pos) = explode(':', $from);
        $from = "The expression return value of argument {$pos} of {$fn}";
        return function ($value) use ($from, $expr, $types) {
            $value = $expr($value);
            $this->validateType($from, $value, $types);
            return $value;
        };
    }

    /** @internal Pass function name validation off to runtime
     * @param $name
     * @param $args
     */
    public function __call($name, $args)
    {
        $name = str_replace('fn_', '', $name);
        throw new RuntimeException("Call to undefined function {$name}");
    }
}
