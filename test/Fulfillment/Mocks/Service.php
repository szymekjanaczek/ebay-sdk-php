<?php

namespace DTS\eBaySDK\Test\Fulfillment\Mocks;

use DTS\eBaySDK\Fulfillment\Services\FulfillmentBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends FulfillmentBaseService
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
