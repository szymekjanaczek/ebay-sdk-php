<?php

namespace DTS\eBaySDK\Test\Analytics\Mocks;

use DTS\eBaySDK\Analytics\Services\AnalyticsBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends AnalyticsBaseService
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
