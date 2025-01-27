<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Feed\Services;

use DTS\eBaySDK\Feed\Types\GetItemFeedRestRequest;
use DTS\eBaySDK\Feed\Types\GetItemFeedRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class FeedService extends FeedBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetItemFeed' => [
            'method'        => 'GET',
            'resource'      => 'item_summary',
            'responseClass' => '\DTS\eBaySDK\Feed\Types\GetItemFeedRestResponse',
            'params'        => [
                'category_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ],
                'date'        => [
                    'valid'    => ['string'],
                    'required' => true
                ],
                'feed_type'   => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param GetItemFeedRestRequest $request
     * @return GetItemFeedRestResponse
     */
    public function getItemFeed(GetItemFeedRestRequest $request)
    {
        return $this->getItemFeedAsync($request)->wait();
    }

    /**
     * @param GetItemFeedRestRequest $request
     * @return PromiseInterface
     */
    public function getItemFeedAsync(GetItemFeedRestRequest $request)
    {
        return $this->callOperationAsync('GetItemFeed', $request);
    }
}
