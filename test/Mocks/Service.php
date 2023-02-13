<?php
namespace DTS\eBaySDK\Test\Mocks;

class Service extends BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\DTS\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\DTS\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
