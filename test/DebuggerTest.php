<?php

namespace DTS\eBaySDK\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Debugger;

class DebuggerTest extends TestCase
{
    public function testOutputsDebugInformation(): void
    {
        $str = '';
        $logfn = static function ($value) use (&$str): void {
            $str .= $value;
        };

        $d = new Debugger(['logfn' => $logfn]);

        $d('debug');

        $this->assertStringContainsString('debug', $str);
    }

    public function testScrubsCredentials(): void
    {
        $msg = <<<EOT
X-EBAY-SOA-SECURITY-TOKEN: token
X-EBAY-SOA-SECURITY-APPNAME: appname
X-EBAY-API-AFFILIATE-USER-ID: userid
X-EBAY-API-APP-ID: appid
X-EBAY-API-TRACKING-ID: trackingid
X-EBAY-API-TRACKING-PARTNER-CODE: partnercode
X-EBAY-API-APP-NAME: appname
X-EBAY-API-CERT-NAME: certname
X-EBAY-API-DEV-NAME: devname
<eBayAuthToken> authtoken </eBayAuthToken>
EOT;

        $str = '';
        $logfn = static function ($value) use (&$str): void {
            $str .= $value;
        };

        $d = new Debugger(['logfn' => $logfn]);

        $d($msg);

        $this->assertStringNotContainsString('token', $str);
        $this->assertStringNotContainsString('appname', $str);
        $this->assertStringNotContainsString('userid', $str);
        $this->assertStringNotContainsString('appid', $str);
        $this->assertStringNotContainsString('trackingid', $str);
        $this->assertStringNotContainsString('partnercode', $str);
        $this->assertStringNotContainsString('appname', $str);
        $this->assertStringNotContainsString('certname', $str);
        $this->assertStringNotContainsString('devname', $str);
        $this->assertStringNotContainsString('authtoken', $str);
    }

    public function testScrubsCustom(): void
    {
        $msg = <<<EOT
X-EBAY-SOA-SECURITY-TOKEN: token
<email>email@example.com</email>
<itemId>123456789</itemId>
EOT;

        $str = '';
        $logfn = static function ($value) use (&$str): void {
            $str .= $value;
        };

        $d = new Debugger([
            'logfn'         => $logfn,
            'scrub_strings' => [
                '/email@example.com/'     => 'REDACTED_EMAIL',
                '/<itemId>\d+<\/itemId>/' => 'REDACTED_ITEM_ID'
            ]
        ]);

        $d($msg);

        $this->assertStringNotContainsString('token', $str);
        $this->assertStringNotContainsString('email@example.com', $str);
        $this->assertStringContainsString('REDACTED_EMAIL', $str);
        $this->assertStringNotContainsString('<itemId>123456789</itemId>', $str);
        $this->assertStringContainsString('REDACTED_ITEM_ID', $str);
    }
}
