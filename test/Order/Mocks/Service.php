<?php

namespace DTS\eBaySDK\Test\Order\Mocks;

use DTS\eBaySDK\Order\Services\OrderBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends OrderBaseService
{
    protected static $operations = [
        'testOperation' => [
            'method'        => 'GET',
            'resource'      => 'item/{item_id}',
            'responseClass' => '\DTS\eBaySDK\Test\Mocks\ComplexClass',
            'params'        => []
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync('testOperation', new ComplexClass())->wait();
    }
}
