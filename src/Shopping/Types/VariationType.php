<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Shopping\Types;

use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property string $SKU
 * @property AmountType $StartPrice
 * @property integer $Quantity
 * @property NameValueListArrayType[] $VariationSpecifics
 * @property SellingStatusType $SellingStatus
 * @property DiscountPriceInfoType $DiscountPriceInfo
 */
class VariationType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'StartPrice' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'VariationSpecifics' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\NameValueListArrayType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
        ],
        'SellingStatus' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\SellingStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ],
        'DiscountPriceInfo' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
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
