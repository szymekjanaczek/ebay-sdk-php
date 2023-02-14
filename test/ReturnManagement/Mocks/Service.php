<?php

namespace DTS\eBaySDK\Test\ReturnManagement\Mocks;

use DTS\eBaySDK\ReturnManagement\Services\ReturnManagementBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends ReturnManagementBaseService
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
