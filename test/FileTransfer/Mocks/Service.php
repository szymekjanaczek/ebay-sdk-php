<?php

namespace DTS\eBaySDK\Test\FileTransfer\Mocks;

use DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends FileTransferBaseService
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
