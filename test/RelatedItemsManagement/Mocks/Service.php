<?php
namespace DTS\eBaySDK\Test\RelatedItemsManagement\Mocks;

use DTS\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends RelatedItemsManagementBaseService
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
