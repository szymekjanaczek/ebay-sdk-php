<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

use DTS\eBaySDK\Trading\Enums\SellingManagerAutoSecondChanceOfferTypeCodeType;
use DTS\eBaySDK\Trading\Enums\SecondChanceOfferDurationCodeType;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property SellingManagerAutoSecondChanceOfferTypeCodeType $SecondChanceOfferCondition
 * @property AmountType $Amount
 * @property double $ProfitPercent
 * @property SecondChanceOfferDurationCodeType $Duration
 * @property integer $ListingHoldInventoryLevel
 */
class SellingManagerAutoSecondChanceOfferType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'SecondChanceOfferCondition' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SecondChanceOfferCondition'
        ],
        'Amount'                     => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Amount'
        ],
        'ProfitPercent'              => [
            'type'        => 'double',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ProfitPercent'
        ],
        'Duration'                   => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Duration'
        ],
        'ListingHoldInventoryLevel'  => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ListingHoldInventoryLevel'
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
