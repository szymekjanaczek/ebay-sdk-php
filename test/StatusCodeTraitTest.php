<?php

namespace DTS\eBaySDK\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Test\Mocks\StatusCode;

class StatusCodeTraitTest extends TestCase
{
    public function testCanSetStatusCode(): void
    {
        $s = new StatusCode(200);

        $this->assertEquals(200, $s->getStatusCode());
    }
}
