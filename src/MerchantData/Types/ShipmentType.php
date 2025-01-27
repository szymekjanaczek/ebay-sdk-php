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
use DTS\eBaySDK\MerchantData\Enums\ShippingFeatureCodeType;
use DTS\eBaySDK\MerchantData\Enums\ShippingPackageCodeType;
use DTS\eBaySDK\MerchantData\Enums\ShipmentDeliveryStatusCodeType;
use DTS\eBaySDK\MerchantData\Enums\ShipmentStatusCodeType;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property DateTime $EstimatedDeliveryDate
 * @property AmountType $InsuredValue
 * @property MeasureType $PackageDepth
 * @property MeasureType $PackageLength
 * @property MeasureType $PackageWidth
 * @property string $PayPalShipmentID
 * @property integer $ShipmentID
 * @property AmountType $PostageTotal
 * @property DateTime $PrintedTime
 * @property AddressType $ShipFromAddress
 * @property AddressType $ShippingAddress
 * @property ShippingFeatureCodeType[] $ShippingFeature
 * @property ShippingPackageCodeType $ShippingPackage
 * @property string $ShippingServiceUsed
 * @property MeasureType $WeightMajor
 * @property MeasureType $WeightMinor
 * @property ItemTransactionIDType[] $ItemTransactionID
 * @property DateTime $DeliveryDate
 * @property ShipmentDeliveryStatusCodeType $DeliveryStatus
 * @property DateTime $RefundGrantedTime
 * @property DateTime $RefundRequestedTime
 * @property ShipmentStatusCodeType $Status
 * @property DateTime $ShippedTime
 * @property string $Notes
 * @property ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property ShipmentLineItemType $ShipmentLineItem
 */
class ShipmentType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'EstimatedDeliveryDate'   => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EstimatedDeliveryDate'
        ],
        'InsuredValue'            => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'InsuredValue'
        ],
        'PackageDepth'            => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PackageDepth'
        ],
        'PackageLength'           => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PackageLength'
        ],
        'PackageWidth'            => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PackageWidth'
        ],
        'PayPalShipmentID'        => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PayPalShipmentID'
        ],
        'ShipmentID'              => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShipmentID'
        ],
        'PostageTotal'            => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PostageTotal'
        ],
        'PrintedTime'             => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PrintedTime'
        ],
        'ShipFromAddress'         => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShipFromAddress'
        ],
        'ShippingAddress'         => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingFeature'         => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ShippingFeature'
        ],
        'ShippingPackage'         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingPackage'
        ],
        'ShippingServiceUsed'     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingServiceUsed'
        ],
        'WeightMajor'             => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'WeightMajor'
        ],
        'WeightMinor'             => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'WeightMinor'
        ],
        'ItemTransactionID'       => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ItemTransactionIDType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ItemTransactionID'
        ],
        'DeliveryDate'            => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DeliveryDate'
        ],
        'DeliveryStatus'          => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DeliveryStatus'
        ],
        'RefundGrantedTime'       => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'RefundGrantedTime'
        ],
        'RefundRequestedTime'     => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'RefundRequestedTime'
        ],
        'Status'                  => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Status'
        ],
        'ShippedTime'             => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippedTime'
        ],
        'Notes'                   => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Notes'
        ],
        'ShipmentTrackingDetails' => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'ShipmentTrackingDetails'
        ],
        'ShipmentLineItem'        => [
            'type'        => 'DTS\eBaySDK\MerchantData\Types\ShipmentLineItemType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShipmentLineItem'
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
