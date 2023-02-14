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

use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property boolean $eligible
 * @property DateTime $endTime
 * @property DateTime $startTime
 */
class EscalationEligibilityInfo extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'eligible'  => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'eligible'
        ],
        'endTime'   => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'endTime'
        ],
        'startTime' => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'startTime'
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
