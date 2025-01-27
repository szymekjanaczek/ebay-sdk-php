<?php

namespace DTS\eBaySDK\Test\Shopping\Mocks;

use DTS\eBaySDK\Shopping\Services\ShoppingBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends ShoppingBaseService
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
