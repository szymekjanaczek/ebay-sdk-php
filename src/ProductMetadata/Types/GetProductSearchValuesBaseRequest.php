<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ProductMetadata\Types;

/**
 *
 * @property string $categoryId
 * @property \DTS\eBaySDK\ProductMetadata\Types\PropertyValue[] $propertyFilter
 * @property boolean $listFormatOnly
 * @property \DTS\eBaySDK\ProductMetadata\Types\SortOrder[] $sortOrder
 */
class GetProductSearchValuesBaseRequest extends \DTS\eBaySDK\ProductMetadata\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryId',
        ],
        'propertyFilter' => [
            'type' => 'DTS\eBaySDK\ProductMetadata\Types\PropertyValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'propertyFilter',
        ],
        'listFormatOnly' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listFormatOnly',
        ],
        'sortOrder' => [
            'type' => 'DTS\eBaySDK\ProductMetadata\Types\SortOrder',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'sortOrder',
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
