<?php

namespace DTS\eBaySDK\Test;

use PHPUnit\Framework\TestCase;

use function DTS\eBaySDK\arrayMergeDeep;

class FunctionsTest extends TestCase
{
    public function testArrayMergeDeepArray(): void
    {
        $a = ['a' => 'b','c' => ['d' => 'e']];
        $b = ['c' => ['f' => 'g']];

        $merged = arrayMergeDeep($a, $b);

        $this->assertEquals([
            'a' => 'b',
            'c' => ['d' => 'e', 'f' => 'g']
        ], $merged);
    }
}
