<?php
namespace DTS\eBaySDK\Credentials\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Credentials\Credentials;

class CredentialsTest extends TestCase
{
    public function testHasGetters(): void
    {
        $c = new Credentials('111', '222', '333', '444');

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }
}
