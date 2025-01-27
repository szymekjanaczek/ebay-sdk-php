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
 * @property CustomListDataType[] $listData
 * @property integer $listId
 * @property string $listName
 * @property CustomListType $listType
 */
class CustomListDetailType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'listData' => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\CustomListDataType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'listData'
        ],
        'listId'   => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'listId'
        ],
        'listName' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'listName'
        ],
        'listType' => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\CustomListType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'listType'
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
