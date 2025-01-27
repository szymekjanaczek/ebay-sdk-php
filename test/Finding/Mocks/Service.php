<?php

namespace DTS\eBaySDK\Test\Finding\Mocks;

use DTS\eBaySDK\Finding\Services\FindingBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends FindingBaseService
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
