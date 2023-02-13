<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Marketing\Types;

use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property InventoryItem[] $excludeInventoryItems
 * @property string[] $excludeListingIds
 * @property SelectionRule[] $selectionRules
 */
class RuleCriteria extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'excludeInventoryItems' => [
            'type' => 'DTS\eBaySDK\Marketing\Types\InventoryItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'excludeInventoryItems'
        ],
        'excludeListingIds' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'excludeListingIds'
        ],
        'selectionRules' => [
            'type' => 'DTS\eBaySDK\Marketing\Types\SelectionRule',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'selectionRules'
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
