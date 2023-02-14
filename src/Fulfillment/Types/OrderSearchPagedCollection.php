<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Fulfillment\Types;

use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property string $href
 * @property integer $limit
 * @property string $next
 * @property integer $offset
 * @property Order[] $orders
 * @property string $prev
 * @property integer $total
 * @property ErrorDetailV3[] $warnings
 */
class OrderSearchPagedCollection extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'href'     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'href'
        ],
        'limit'    => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'limit'
        ],
        'next'     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'next'
        ],
        'offset'   => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'offset'
        ],
        'orders'   => [
            'type'        => 'DTS\eBaySDK\Fulfillment\Types\Order',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'orders'
        ],
        'prev'     => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'prev'
        ],
        'total'    => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'total'
        ],
        'warnings' => [
            'type'        => 'DTS\eBaySDK\Fulfillment\Types\ErrorDetailV3',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'warnings'
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
