<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Order\Types;

use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property Amount $baseDeliveryCost
 * @property Amount $deliveryDiscount
 * @property string $maxEstimatedDeliveryDate
 * @property string $minEstimatedDeliveryDate
 * @property boolean $selected
 * @property string $shippingCarrierCode
 * @property string $shippingOptionId
 * @property string $shippingServiceCode
 */
class ShippingOption extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'baseDeliveryCost' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'baseDeliveryCost'
        ],
        'deliveryDiscount' => [
            'type' => 'DTS\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryDiscount'
        ],
        'maxEstimatedDeliveryDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxEstimatedDeliveryDate'
        ],
        'minEstimatedDeliveryDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minEstimatedDeliveryDate'
        ],
        'selected' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'selected'
        ],
        'shippingCarrierCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCarrierCode'
        ],
        'shippingOptionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingOptionId'
        ],
        'shippingServiceCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceCode'
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
