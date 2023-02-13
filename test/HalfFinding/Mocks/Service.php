<?php
namespace DTS\eBaySDK\Test\HalfFinding\Mocks;

use DTS\eBaySDK\HalfFinding\Services\HalfFindingBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends HalfFindingBaseService
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
