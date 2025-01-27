<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Metadata\Services;

use DTS\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestRequest;
use DTS\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestResponse;
use GuzzleHttp\Promise\PromiseInterface;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestRequest;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestResponse;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestRequest;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestResponse;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestRequest;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestResponse;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestRequest;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestRequest;
use DTS\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestResponse;

class MetadataService extends MetadataBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetSalesTaxJurisdictions'             => [
            'method'        => 'GET',
            'resource'      => 'country/{countryCode}/sales_tax_jurisdiction',
            'responseClass' => '\DTS\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestResponse',
            'params'        => [
                'countryCode' => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForAutoPartsCompatibility' => [
            'method'        => 'GET',
            'resource'      => 'marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies',
            'responseClass' => '\DTS\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestResponse',
            'params'        => [
                'filter'         => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForItemCondition'          => [
            'method'        => 'GET',
            'resource'      => 'marketplace/{marketplace_id}/get_item_condition_policies',
            'responseClass' => '\DTS\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestResponse',
            'params'        => [
                'filter'         => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForListingStructures'      => [
            'method'        => 'GET',
            'resource'      => 'marketplace/{marketplace_id}/get_listing_structure_policies',
            'responseClass' => '\DTS\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestResponse',
            'params'        => [
                'filter'         => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForNegotiatedPrice'        => [
            'method'        => 'GET',
            'resource'      => 'marketplace/{marketplace_id}/get_negotiated_price_policies',
            'responseClass' => '\DTS\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse',
            'params'        => [
                'filter'         => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForReturns'                => [
            'method'        => 'GET',
            'resource'      => 'marketplace/{marketplace_id}/get_return_policies',
            'responseClass' => '\DTS\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestResponse',
            'params'        => [
                'filter'         => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
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
     * @param GetSalesTaxJurisdictionsRestRequest $request
     * @return GetSalesTaxJurisdictionsRestResponse
     */
    public function getSalesTaxJurisdictions(GetSalesTaxJurisdictionsRestRequest $request)
    {
        return $this->getSalesTaxJurisdictionsAsync($request)->wait();
    }

    /**
     * @param GetSalesTaxJurisdictionsRestRequest $request
     * @return PromiseInterface
     */
    public function getSalesTaxJurisdictionsAsync(GetSalesTaxJurisdictionsRestRequest $request)
    {
        return $this->callOperationAsync('GetSalesTaxJurisdictions', $request);
    }

    /**
     * @param GetPoliciesForAutoPartsCompatibilityRestRequest $request
     * @return GetPoliciesForAutoPartsCompatibilityRestResponse
     */
    public function getPoliciesForAutoPartsCompatibility(GetPoliciesForAutoPartsCompatibilityRestRequest $request)
    {
        return $this->getPoliciesForAutoPartsCompatibilityAsync($request)->wait();
    }

    /**
     * @param GetPoliciesForAutoPartsCompatibilityRestRequest $request
     * @return PromiseInterface
     */
    public function getPoliciesForAutoPartsCompatibilityAsync(GetPoliciesForAutoPartsCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForAutoPartsCompatibility', $request);
    }

    /**
     * @param GetPoliciesForItemConditionRestRequest $request
     * @return GetPoliciesForItemConditionRestResponse
     */
    public function getPoliciesForItemCondition(GetPoliciesForItemConditionRestRequest $request)
    {
        return $this->getPoliciesForItemConditionAsync($request)->wait();
    }

    /**
     * @param GetPoliciesForItemConditionRestRequest $request
     * @return PromiseInterface
     */
    public function getPoliciesForItemConditionAsync(GetPoliciesForItemConditionRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForItemCondition', $request);
    }

    /**
     * @param GetPoliciesForListingStructuresRestRequest $request
     * @return GetPoliciesForListingStructuresRestResponse
     */
    public function getPoliciesForListingStructures(GetPoliciesForListingStructuresRestRequest $request)
    {
        return $this->getPoliciesForListingStructuresAsync($request)->wait();
    }

    /**
     * @param GetPoliciesForListingStructuresRestRequest $request
     * @return PromiseInterface
     */
    public function getPoliciesForListingStructuresAsync(GetPoliciesForListingStructuresRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForListingStructures', $request);
    }

    /**
     * @param GetPoliciesForNegotiatedPriceRestRequest $request
     * @return GetPoliciesForNegotiatedPriceRestResponse
     */
    public function getPoliciesForNegotiatedPrice(GetPoliciesForNegotiatedPriceRestRequest $request)
    {
        return $this->getPoliciesForNegotiatedPriceAsync($request)->wait();
    }

    /**
     * @param GetPoliciesForNegotiatedPriceRestRequest $request
     * @return PromiseInterface
     */
    public function getPoliciesForNegotiatedPriceAsync(GetPoliciesForNegotiatedPriceRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForNegotiatedPrice', $request);
    }

    /**
     * @param GetPoliciesForReturnsRestRequest $request
     * @return GetPoliciesForReturnsRestResponse
     */
    public function getPoliciesForReturns(GetPoliciesForReturnsRestRequest $request)
    {
        return $this->getPoliciesForReturnsAsync($request)->wait();
    }

    /**
     * @param GetPoliciesForReturnsRestRequest $request
     * @return PromiseInterface
     */
    public function getPoliciesForReturnsAsync(GetPoliciesForReturnsRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForReturns', $request);
    }
}
