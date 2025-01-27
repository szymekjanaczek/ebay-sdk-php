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

use DTS\eBaySDK\PostOrder\Enums\MarketplaceIdEnum;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property ReturnAddressType $buyerAddress
 * @property string $buyerLoginName
 * @property ReturnCloseInfoType $closeInfo
 * @property DispositionRuleDetailType[] $dispositionRuleDetail
 * @property ReturnFileType[] $files
 * @property ReturnHoldInfoType $holdInfo
 * @property ItemDetailType $itemDetail
 * @property MarketplaceIdEnum $marketplaceId
 * @property MoneyMovementDetailType[] $moneyMovementInfo
 * @property RefundInfoType $refundInfo
 * @property ShipmentType $replacementShipmentInfo
 * @property ReturnResponseHistoryType[] $responseHistory
 * @property ShipmentType $returnShipmentInfo
 * @property string $RMANumber
 * @property ReturnAddressType $sellerAddress
 * @property string $sellerLoginName
 */
class ReturnDetailType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'buyerAddress'            => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'buyerAddress'
        ],
        'buyerLoginName'          => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'buyerLoginName'
        ],
        'closeInfo'               => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnCloseInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'closeInfo'
        ],
        'dispositionRuleDetail'   => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\DispositionRuleDetailType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'dispositionRuleDetail'
        ],
        'files'                   => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnFileType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'files'
        ],
        'holdInfo'                => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnHoldInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'holdInfo'
        ],
        'itemDetail'              => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ItemDetailType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'itemDetail'
        ],
        'marketplaceId'           => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'marketplaceId'
        ],
        'moneyMovementInfo'       => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\MoneyMovementDetailType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'moneyMovementInfo'
        ],
        'refundInfo'              => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\RefundInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'refundInfo'
        ],
        'replacementShipmentInfo' => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ShipmentType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'replacementShipmentInfo'
        ],
        'responseHistory'         => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnResponseHistoryType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'responseHistory'
        ],
        'returnShipmentInfo'      => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ShipmentType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnShipmentInfo'
        ],
        'RMANumber'               => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'RMANumber'
        ],
        'sellerAddress'           => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerAddress'
        ],
        'sellerLoginName'         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerLoginName'
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
