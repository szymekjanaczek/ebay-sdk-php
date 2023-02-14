<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Account\Types;

use DTS\eBaySDK\Account\Enums\MarketplaceIdEnum;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property CategoryType[] $categoryTypes
 * @property string $description
 * @property boolean $freightShipping
 * @property string $fulfillmentPolicyId
 * @property boolean $globalShipping
 * @property TimeDuration $handlingTime
 * @property boolean $localPickup
 * @property MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property boolean $pickupDropOff
 * @property ShippingOption[] $shippingOptions
 * @property RegionSet $shipToLocations
 * @property ErrorDetailV3[] $warnings
 */
class SetFulfillmentPolicyResponse extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'categoryTypes'       => [
            'type'        => 'DTS\eBaySDK\Account\Types\CategoryType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'categoryTypes'
        ],
        'description'         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'description'
        ],
        'freightShipping'     => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'freightShipping'
        ],
        'fulfillmentPolicyId' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'fulfillmentPolicyId'
        ],
        'globalShipping'      => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'globalShipping'
        ],
        'handlingTime'        => [
            'type'        => 'DTS\eBaySDK\Account\Types\TimeDuration',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'handlingTime'
        ],
        'localPickup'         => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'localPickup'
        ],
        'marketplaceId'       => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'marketplaceId'
        ],
        'name'                => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'name'
        ],
        'pickupDropOff'       => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'pickupDropOff'
        ],
        'shippingOptions'     => [
            'type'        => 'DTS\eBaySDK\Account\Types\ShippingOption',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'shippingOptions'
        ],
        'shipToLocations'     => [
            'type'        => 'DTS\eBaySDK\Account\Types\RegionSet',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'shipToLocations'
        ],
        'warnings'            => [
            'type'        => 'DTS\eBaySDK\Account\Types\ErrorDetailV3',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'warnings'
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
