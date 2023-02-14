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

use DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType;
use DateTime;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property integer $PackageID
 * @property string $Description
 * @property ShippingPackageCodeType $ShippingPackage
 * @property boolean $DefaultValue
 * @property boolean $DimensionsSupported
 * @property string $DetailVersion
 * @property DateTime $UpdateTime
 */
class ShippingPackageDetailsType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'PackageID'           => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PackageID'
        ],
        'Description'         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Description'
        ],
        'ShippingPackage'     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ShippingPackage'
        ],
        'DefaultValue'        => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DefaultValue'
        ],
        'DimensionsSupported' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DimensionsSupported'
        ],
        'DetailVersion'       => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DetailVersion'
        ],
        'UpdateTime'          => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UpdateTime'
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
