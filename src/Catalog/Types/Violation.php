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
 * @property ViolationAspectValues[] $aspectsValues
 * @property ViolationProductAttribute $productAttribute
 * @property integer $reason
 * @property integer $violationCode
 */
class Violation extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspectsValues' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\ViolationAspectValues',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspectsValues'
        ],
        'productAttribute' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\ViolationProductAttribute',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productAttribute'
        ],
        'reason' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reason'
        ],
        'violationCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'violationCode'
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
