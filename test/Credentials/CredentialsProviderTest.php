<?php
namespace DTS\eBaySDK\Test\Credentials;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Test\TestTraits\ManageEnv;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\Credentials\Credentials;
use InvalidArgumentException;

class CredentialsProviderTest extends TestCase
{
    use ManageEnv;

    public function testCreatesFromEnvironmentVariables(): void
    {
        $this->clearEnv();
        putenv(CredentialsProvider::ENV_APP_ID . '=111');
        putenv(CredentialsProvider::ENV_CERT_ID . '=222');
        putenv(CredentialsProvider::ENV_DEV_ID . '=333');

        $p = CredentialsProvider::env();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testReturnsExceptionIfNoEnvironmentVariables(): never
    {
        $this->clearEnv();

        $p = CredentialsProvider::env();
        $c = $p();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not find environment variable');

        throw $c;
    }

    public function testCreatesFromIniFile(): void
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('default');
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    public function testEnsuresIniFileIsValid(): never
    {
        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', "wef \n=\nwef");
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini();
        $c = @$p();

        unlink($dir . '/credentials');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid credentials file');

        throw $c;
    }

    public function testEnsuresIniFileExists(): never
    {
        $this->clearEnv();
        putenv('HOME=/does/not/exist');

        $p = CredentialsProvider::ini();
        $c = $p();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot read credentials from');

        throw $c;
    }

    public function testEnsuresProfileIsNotEmpty(): never
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
[foo]
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('foo');
        $c = $p();

        unlink($dir . '/credentials');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('No credentials present in INI profile');

        throw $c;
    }

    public function testEnsuresFileIsNotEmpty(): never
    {
        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', '');
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('foo');
        $c = $p();

        unlink($dir . '/credentials');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("'foo' not found in credentials file");

        throw $c;
    }

    public function testMemoize(): void
    {
        $called = 0;
        $c = new Credentials('111', '222', '333');
        $f = function () use (&$called, &$c): Credentials {
            $called++;
            return $c;
        };
        $p = CredentialsProvider::memoize($f);
        $this->assertSame($c, $p());
        $this->assertEquals(1, $called);
        $this->assertSame($c, $p());
        $this->assertEquals(1, $called);
    }

    public function testChain()
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
[foo]
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $a = CredentialsProvider::ini('foo');
        $b = CredentialsProvider::ini();
        $c = function (): never {
            throw new InvalidArgumentException('Should not be called');
        };

        $p = CredentialsProvider::chain($a, $b, $c);
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    public function testTrysEnvVarByDefault(): void
    {
        $this->clearEnv();
        putenv(CredentialsProvider::ENV_APP_ID . '=111');
        putenv(CredentialsProvider::ENV_CERT_ID . '=222');
        putenv(CredentialsProvider::ENV_DEV_ID . '=333');

        $p = CredentialsProvider::defaultProvider();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testTrysIniByDefault(): void
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::defaultProvider();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }
}
