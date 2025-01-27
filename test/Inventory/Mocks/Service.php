<?php

namespace DTS\eBaySDK\Test\Inventory\Mocks;

use DTS\eBaySDK\Inventory\Services\InventoryBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends InventoryBaseService
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
