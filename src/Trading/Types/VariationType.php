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

use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property string $SKU
 * @property AmountType $StartPrice
 * @property integer $Quantity
 * @property NameValueListArrayType[] $VariationSpecifics
 * @property integer $UnitsAvailable
 * @property AmountType $UnitCost
 * @property SellingStatusType $SellingStatus
 * @property string $VariationTitle
 * @property string $VariationViewItemURL
 * @property boolean $Delete
 * @property SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
 * @property integer $WatchCount
 * @property string $PrivateNotes
 * @property DiscountPriceInfoType $DiscountPriceInfo
 * @property VariationProductListingDetailsType $VariationProductListingDetails
 */
class VariationType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'SKU'                                  => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SKU'
        ],
        'StartPrice'                           => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StartPrice'
        ],
        'Quantity'                             => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Quantity'
        ],
        'VariationSpecifics'                   => [
            'type'        => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'VariationSpecifics'
        ],
        'UnitsAvailable'                       => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UnitsAvailable'
        ],
        'UnitCost'                             => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UnitCost'
        ],
        'SellingStatus'                        => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellingStatusType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellingStatus'
        ],
        'VariationTitle'                       => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VariationTitle'
        ],
        'VariationViewItemURL'                 => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VariationViewItemURL'
        ],
        'Delete'                               => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Delete'
        ],
        'SellingManagerProductInventoryStatus' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellingManagerProductInventoryStatusType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellingManagerProductInventoryStatus'
        ],
        'WatchCount'                           => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'WatchCount'
        ],
        'PrivateNotes'                         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PrivateNotes'
        ],
        'DiscountPriceInfo'                    => [
            'type'        => 'DTS\eBaySDK\Trading\Types\DiscountPriceInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'VariationProductListingDetails'       => [
            'type'        => 'DTS\eBaySDK\Trading\Types\VariationProductListingDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VariationProductListingDetails'
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
