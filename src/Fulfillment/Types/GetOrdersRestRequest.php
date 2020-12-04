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

/**
 *
 * @property string $filter
 * @property string $limit
 * @property string $offset
 * @property string $orderIds
 */
class GetOrdersRestRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'filter' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'filter',
        ],
        'limit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit',
        ],
        'offset' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offset',
        ],
        'orderIds' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderIds',
        ],
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
