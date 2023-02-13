<?php
namespace DTS\eBaySDK\Test\Feedback\Mocks;

use DTS\eBaySDK\Feedback\Services\FeedbackBaseService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends FeedbackBaseService
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
