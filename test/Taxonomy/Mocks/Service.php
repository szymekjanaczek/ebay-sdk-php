<?php

namespace DTS\eBaySDK\Test\Taxonomy\Mocks;

use DTS\eBaySDK\Taxonomy\Services\TaxonomyBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends TaxonomyBaseService
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
