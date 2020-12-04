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

/**
 *
 * @property \DTS\eBaySDK\Account\Types\Amount $additionalShippingCost
 * @property boolean $buyerResponsibleForPickup
 * @property boolean $buyerResponsibleForShipping
 * @property \DTS\eBaySDK\Account\Types\Amount $cashOnDeliveryFee
 * @property boolean $freeShipping
 * @property string $shippingCarrierCode
 * @property \DTS\eBaySDK\Account\Types\Amount $shippingCost
 * @property string $shippingServiceCode
 * @property \DTS\eBaySDK\Account\Types\RegionSet $shipToLocations
 * @property integer $sortOrder
 * @property \DTS\eBaySDK\Account\Types\Amount $surcharge
 */
class ShippingService extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalShippingCost' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'additionalShippingCost',
        ],
        'buyerResponsibleForPickup' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponsibleForPickup',
        ],
        'buyerResponsibleForShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponsibleForShipping',
        ],
        'cashOnDeliveryFee' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cashOnDeliveryFee',
        ],
        'freeShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'freeShipping',
        ],
        'shippingCarrierCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCarrierCode',
        ],
        'shippingCost' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCost',
        ],
        'shippingServiceCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceCode',
        ],
        'shipToLocations' => [
            'type' => 'DTS\eBaySDK\Account\Types\RegionSet',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipToLocations',
        ],
        'sortOrder' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sortOrder',
        ],
        'surcharge' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'surcharge',
        ],
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
