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
 * @property string $fulfillmentPolicyId
 * @property string $paymentPolicyId
 * @property string $returnPolicyId
 * @property ShippingCostOverride[] $shippingCostOverrides
 */
class ListingPolicies extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'fulfillmentPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fulfillmentPolicyId'
        ],
        'paymentPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentPolicyId'
        ],
        'returnPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicyId'
        ],
        'shippingCostOverrides' => [
            'type' => 'DTS\eBaySDK\Inventory\Types\ShippingCostOverride',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingCostOverrides'
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
