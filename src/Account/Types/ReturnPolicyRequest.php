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
use DTS\eBaySDK\Account\Enums\RefundMethodEnum;
use DTS\eBaySDK\Account\Enums\ReturnMethodEnum;
use DTS\eBaySDK\Account\Enums\ReturnShippingCostPayerEnum;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property CategoryType[] $categoryTypes
 * @property string $description
 * @property boolean $extendedHolidayReturnsOffered
 * @property MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property RefundMethodEnum $refundMethod
 * @property string $restockingFeePercentage
 * @property string $returnInstructions
 * @property ReturnMethodEnum $returnMethod
 * @property TimeDuration $returnPeriod
 * @property boolean $returnsAccepted
 * @property ReturnShippingCostPayerEnum $returnShippingCostPayer
 */
class ReturnPolicyRequest extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'categoryTypes'                 => [
            'type'        => 'DTS\eBaySDK\Account\Types\CategoryType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'categoryTypes'
        ],
        'description'                   => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'description'
        ],
        'extendedHolidayReturnsOffered' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'extendedHolidayReturnsOffered'
        ],
        'marketplaceId'                 => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'marketplaceId'
        ],
        'name'                          => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'name'
        ],
        'refundMethod'                  => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'refundMethod'
        ],
        'restockingFeePercentage'       => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'restockingFeePercentage'
        ],
        'returnInstructions'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnInstructions'
        ],
        'returnMethod'                  => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnMethod'
        ],
        'returnPeriod'                  => [
            'type'        => 'DTS\eBaySDK\Account\Types\TimeDuration',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnPeriod'
        ],
        'returnsAccepted'               => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnsAccepted'
        ],
        'returnShippingCostPayer'       => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnShippingCostPayer'
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
