<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Marketing\Types;

use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property Amount $amountOffItem
 * @property Amount $amountOffOrder
 * @property string $percentageOffItem
 * @property string $percentageOffOrder
 */
class DiscountBenefit extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'amountOffItem' => [
            'type' => 'DTS\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amountOffItem'
        ],
        'amountOffOrder' => [
            'type' => 'DTS\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amountOffOrder'
        ],
        'percentageOffItem' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'percentageOffItem'
        ],
        'percentageOffOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'percentageOffOrder'
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
