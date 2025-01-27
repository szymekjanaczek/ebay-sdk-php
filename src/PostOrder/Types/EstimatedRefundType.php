<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Enums\RefundFeeTypeEnum;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property Amount $estimatedAmount
 * @property Amount $maxAmount
 * @property Amount $minAmount
 * @property RefundFeeTypeEnum $refundFeeType
 * @property string $restockingFeePercentage
 */
class EstimatedRefundType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'estimatedAmount'         => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'estimatedAmount'
        ],
        'maxAmount'               => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'maxAmount'
        ],
        'minAmount'               => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'minAmount'
        ],
        'refundFeeType'           => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'refundFeeType'
        ],
        'restockingFeePercentage' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'restockingFeePercentage'
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
