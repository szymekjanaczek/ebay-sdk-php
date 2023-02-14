<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Feedback\Services;

use DTS\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest;
use DTS\eBaySDK\Feedback\Types\CreateDSRSummaryResponse;
use GuzzleHttp\Promise\PromiseInterface;
use DTS\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest;
use DTS\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest;
use DTS\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest;
use DTS\eBaySDK\Feedback\Types\GetDSRSummaryRequest;
use DTS\eBaySDK\Feedback\Types\GetDSRSummaryResponse;

class FeedbackService extends FeedbackBaseService
{
    const API_VERSION = '1.2.2';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param CreateDSRSummaryByTransactionRequest $request
     * @return CreateDSRSummaryResponse
     */
    public function createDSRSummaryByTransaction(CreateDSRSummaryByTransactionRequest $request)
    {
        return $this->createDSRSummaryByTransactionAsync($request)->wait();
    }

    /**
     * @param CreateDSRSummaryByTransactionRequest $request
     * @return PromiseInterface
     */
    public function createDSRSummaryByTransactionAsync(CreateDSRSummaryByTransactionRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByTransaction',
            $request,
            '\DTS\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param CreateDSRSummaryByPeriodRequest $request
     * @return CreateDSRSummaryResponse
     */
    public function createDSRSummaryByPeriod(CreateDSRSummaryByPeriodRequest $request)
    {
        return $this->createDSRSummaryByPeriodAsync($request)->wait();
    }

    /**
     * @param CreateDSRSummaryByPeriodRequest $request
     * @return PromiseInterface
     */
    public function createDSRSummaryByPeriodAsync(CreateDSRSummaryByPeriodRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByPeriod',
            $request,
            '\DTS\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param CreateDSRSummaryByCategoryRequest $request
     * @return CreateDSRSummaryResponse
     */
    public function createDSRSummaryByCategory(CreateDSRSummaryByCategoryRequest $request)
    {
        return $this->createDSRSummaryByCategoryAsync($request)->wait();
    }

    /**
     * @param CreateDSRSummaryByCategoryRequest $request
     * @return PromiseInterface
     */
    public function createDSRSummaryByCategoryAsync(CreateDSRSummaryByCategoryRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByCategory',
            $request,
            '\DTS\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param CreateDSRSummaryByShippingDetailRequest $request
     * @return CreateDSRSummaryResponse
     */
    public function createDSRSummaryByShippingDetail(CreateDSRSummaryByShippingDetailRequest $request)
    {
        return $this->createDSRSummaryByShippingDetailAsync($request)->wait();
    }

    /**
     * @param CreateDSRSummaryByShippingDetailRequest $request
     * @return PromiseInterface
     */
    public function createDSRSummaryByShippingDetailAsync(CreateDSRSummaryByShippingDetailRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByShippingDetail',
            $request,
            '\DTS\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param GetDSRSummaryRequest $request
     * @return GetDSRSummaryResponse
     */
    public function getDSRSummary(GetDSRSummaryRequest $request)
    {
        return $this->getDSRSummaryAsync($request)->wait();
    }

    /**
     * @param GetDSRSummaryRequest $request
     * @return PromiseInterface
     */
    public function getDSRSummaryAsync(GetDSRSummaryRequest $request)
    {
        return $this->callOperationAsync(
            'getDSRSummary',
            $request,
            '\DTS\eBaySDK\Feedback\Types\GetDSRSummaryResponse'
        );
    }
}
