<?php

namespace DTS\eBaySDK\Test\BulkDataExchange\Mocks;

use DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends BulkDataExchangeBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\DTS\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
