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

use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property ConflictingProduct[] $conflictingProducts
 * @property Correction[] $corrections
 * @property string $epid
 * @property string $productHref
 * @property Violation[] $violations
 */
class ProcessResolution extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'conflictingProducts' => [
            'type'        => 'DTS\eBaySDK\Catalog\Types\ConflictingProduct',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'conflictingProducts'
        ],
        'corrections'         => [
            'type'        => 'DTS\eBaySDK\Catalog\Types\Correction',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'corrections'
        ],
        'epid'                => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'epid'
        ],
        'productHref'         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'productHref'
        ],
        'violations'          => [
            'type'        => 'DTS\eBaySDK\Catalog\Types\Violation',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'violations'
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
