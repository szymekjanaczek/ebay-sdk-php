<?php
namespace DTS\eBaySDK\Test\Mocks;

class RestService extends BaseRestService
{
    protected static $operations =  [
        'foo' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function foo(ComplexClass $request)
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }
}
