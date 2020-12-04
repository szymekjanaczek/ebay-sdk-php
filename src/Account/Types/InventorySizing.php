<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Account\Types;

/**
 *
 * @property integer $currentAvailableQuantity
 * @property \DTS\eBaySDK\Account\Types\Amount $currentInventoryValue
 * @property \DTS\eBaySDK\Account\Types\InventorySnapshot $inventorySnapshots
 * @property string $primarySalesCategory
 */
class InventorySizing extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'currentAvailableQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentAvailableQuantity',
        ],
        'currentInventoryValue' => [
            'type' => 'DTS\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentInventoryValue',
        ],
        'inventorySnapshots' => [
            'type' => 'DTS\eBaySDK\Account\Types\InventorySnapshot',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventorySnapshots',
        ],
        'primarySalesCategory' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primarySalesCategory',
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
