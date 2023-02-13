<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property ValType[] $Value
 * @property integer $attributeID
 * @property string $attributeLabel
 */
class AttributeType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Value' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ValType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Value'
        ],
        'attributeID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'attributeID'
        ],
        'attributeLabel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'attributeLabel'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
