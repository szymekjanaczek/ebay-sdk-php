<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Inventory\Types;

use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property integer $availableQuantity
 * @property string $categoryId
 * @property string $listingDescription
 * @property ListingPolicies $listingPolicies
 * @property string $merchantLocationKey
 * @property PricingSummary $pricingSummary
 * @property integer $quantityLimitPerBuyer
 * @property string[] $storeCategoryNames
 * @property Tax $tax
 */
class EbayOfferDetailsWithId extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'availableQuantity'     => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'availableQuantity'
        ],
        'categoryId'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'categoryId'
        ],
        'listingDescription'    => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'listingDescription'
        ],
        'listingPolicies'       => [
            'type'        => 'DTS\eBaySDK\Inventory\Types\ListingPolicies',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'listingPolicies'
        ],
        'merchantLocationKey'   => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'merchantLocationKey'
        ],
        'pricingSummary'        => [
            'type'        => 'DTS\eBaySDK\Inventory\Types\PricingSummary',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'pricingSummary'
        ],
        'quantityLimitPerBuyer' => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'quantityLimitPerBuyer'
        ],
        'storeCategoryNames'    => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'storeCategoryNames'
        ],
        'tax'                   => [
            'type'        => 'DTS\eBaySDK\Inventory\Types\Tax',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'tax'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
