<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Catalog\Types;

use DTS\eBaySDK\Catalog\Enums\AspectDataTypeEnum;
use DTS\eBaySDK\Catalog\Enums\AspectModeEnum;
use DTS\eBaySDK\Catalog\Enums\ItemToAspectCardinalityEnum;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property AspectDataTypeEnum $aspectDataType
 * @property string $aspectFormat
 * @property AspectModeEnum $aspectMode
 * @property boolean $aspectRequired
 * @property ItemToAspectCardinalityEnum $productToAspectCardinality
 */
class ProductAspectConstraint extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'aspectDataType'             => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'aspectDataType'
        ],
        'aspectFormat'               => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'aspectFormat'
        ],
        'aspectMode'                 => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'aspectMode'
        ],
        'aspectRequired'             => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'aspectRequired'
        ],
        'productToAspectCardinality' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'productToAspectCardinality'
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
