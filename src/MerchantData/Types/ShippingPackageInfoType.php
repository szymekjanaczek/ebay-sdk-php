<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

use DateTime;
use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property string $StoreID
 * @property string $ShippingTrackingEvent
 * @property DateTime $ScheduledDeliveryTimeMin
 * @property DateTime $ScheduledDeliveryTimeMax
 * @property DateTime $ActualDeliveryTime
 * @property DateTime $EstimatedDeliveryTimeMin
 * @property DateTime $EstimatedDeliveryTimeMax
 */
class ShippingPackageInfoType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'StoreID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreID'
        ],
        'ShippingTrackingEvent' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTrackingEvent'
        ],
        'ScheduledDeliveryTimeMin' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduledDeliveryTimeMin'
        ],
        'ScheduledDeliveryTimeMax' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduledDeliveryTimeMax'
        ],
        'ActualDeliveryTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualDeliveryTime'
        ],
        'EstimatedDeliveryTimeMin' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryTimeMin'
        ],
        'EstimatedDeliveryTimeMax' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryTimeMax'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
