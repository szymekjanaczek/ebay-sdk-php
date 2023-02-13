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

use DTS\eBaySDK\Fulfillment\Enums\CancelStateEnum;
use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property string $cancelledDate
 * @property CancelRequest[] $cancelRequests
 * @property CancelStateEnum $cancelState
 */
class CancelStatus extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'cancelledDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelledDate'
        ],
        'cancelRequests' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\CancelRequest',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'cancelRequests'
        ],
        'cancelState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelState'
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
