<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Taxonomy\Services;

use DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest;
use DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse;
use GuzzleHttp\Promise\PromiseInterface;
use DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestRequest;
use DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestResponse;
use DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestRequest;
use DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestResponse;
use DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestRequest;
use DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestResponse;
use DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestRequest;
use DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestResponse;

class TaxonomyService extends TaxonomyBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetADefaultCategoryTreeId' => [
            'method'        => 'GET',
            'resource'      => 'get_default_category_tree_id',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse',
            'params'        => [
                'marketplace_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetACategoryTree'          => [
            'method'        => 'GET',
            'resource'      => 'category_tree/{category_tree_id}',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetACategoryTreeRestResponse',
            'params'        => [
                'category_tree_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetACategorySubtree'       => [
            'method'        => 'GET',
            'resource'      => 'category_tree/{category_tree_id}/get_category_subtree',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetACategorySubtreeRestResponse',
            'params'        => [
                'category_id'      => [
                    'valid'    => ['string'],
                    'required' => true
                ],
                'category_tree_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetSuggestedCategories'    => [
            'method'        => 'GET',
            'resource'      => 'category_tree/{category_tree_id}/get_category_suggestions',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetSuggestedCategoriesRestResponse',
            'params'        => [
                'category_tree_id' => [
                    'valid'    => ['string'],
                    'required' => true
                ],
                'q'                => [
                    'valid'    => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetItemAspectsForCategory' => [
            'method'        => 'GET',
            'resource'      => 'category_tree/{category_tree_id}/get_item_aspects_for_category',
            'responseClass' => '\DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestResponse',
            'params'        => [
                'category_id'      => [
                    'valid'    => ['string'],
                    'required' => true
                ],
                'category_tree_id' => [
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
     * @param GetADefaultCategoryTreeIdRestRequest $request
     * @return GetADefaultCategoryTreeIdRestResponse
     */
    public function getADefaultCategoryTreeId(GetADefaultCategoryTreeIdRestRequest $request)
    {
        return $this->getADefaultCategoryTreeIdAsync($request)->wait();
    }

    /**
     * @param GetADefaultCategoryTreeIdRestRequest $request
     * @return PromiseInterface
     */
    public function getADefaultCategoryTreeIdAsync(GetADefaultCategoryTreeIdRestRequest $request)
    {
        return $this->callOperationAsync('GetADefaultCategoryTreeId', $request);
    }

    /**
     * @param GetACategoryTreeRestRequest $request
     * @return GetACategoryTreeRestResponse
     */
    public function getACategoryTree(GetACategoryTreeRestRequest $request)
    {
        return $this->getACategoryTreeAsync($request)->wait();
    }

    /**
     * @param GetACategoryTreeRestRequest $request
     * @return PromiseInterface
     */
    public function getACategoryTreeAsync(GetACategoryTreeRestRequest $request)
    {
        return $this->callOperationAsync('GetACategoryTree', $request);
    }

    /**
     * @param GetACategorySubtreeRestRequest $request
     * @return GetACategorySubtreeRestResponse
     */
    public function getACategorySubtree(GetACategorySubtreeRestRequest $request)
    {
        return $this->getACategorySubtreeAsync($request)->wait();
    }

    /**
     * @param GetACategorySubtreeRestRequest $request
     * @return PromiseInterface
     */
    public function getACategorySubtreeAsync(GetACategorySubtreeRestRequest $request)
    {
        return $this->callOperationAsync('GetACategorySubtree', $request);
    }

    /**
     * @param GetSuggestedCategoriesRestRequest $request
     * @return GetSuggestedCategoriesRestResponse
     */
    public function getSuggestedCategories(GetSuggestedCategoriesRestRequest $request)
    {
        return $this->getSuggestedCategoriesAsync($request)->wait();
    }

    /**
     * @param GetSuggestedCategoriesRestRequest $request
     * @return PromiseInterface
     */
    public function getSuggestedCategoriesAsync(GetSuggestedCategoriesRestRequest $request)
    {
        return $this->callOperationAsync('GetSuggestedCategories', $request);
    }

    /**
     * @param GetItemAspectsForCategoryRestRequest $request
     * @return GetItemAspectsForCategoryRestResponse
     */
    public function getItemAspectsForCategory(GetItemAspectsForCategoryRestRequest $request)
    {
        return $this->getItemAspectsForCategoryAsync($request)->wait();
    }

    /**
     * @param GetItemAspectsForCategoryRestRequest $request
     * @return PromiseInterface
     */
    public function getItemAspectsForCategoryAsync(GetItemAspectsForCategoryRestRequest $request)
    {
        return $this->callOperationAsync('GetItemAspectsForCategory', $request);
    }
}
