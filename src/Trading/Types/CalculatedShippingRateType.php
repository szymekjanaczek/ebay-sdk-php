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

use DTS\eBaySDK\Trading\Enums\MeasurementSystemCodeType;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property string $OriginatingPostalCode
 * @property MeasurementSystemCodeType $MeasurementUnit
 * @property AmountType $PackagingHandlingCosts
 * @property boolean $ShippingIrregular
 * @property AmountType $InternationalPackagingHandlingCosts
 */
class CalculatedShippingRateType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'OriginatingPostalCode'               => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'OriginatingPostalCode'
        ],
        'MeasurementUnit'                     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'MeasurementUnit'
        ],
        'PackagingHandlingCosts'              => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PackagingHandlingCosts'
        ],
        'ShippingIrregular'                   => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingIrregular'
        ],
        'InternationalPackagingHandlingCosts' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'InternationalPackagingHandlingCosts'
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
