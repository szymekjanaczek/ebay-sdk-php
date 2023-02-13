<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property SellingManagerFolderDetailsType $SellingManagerFolderDetails
 * @property string[] $DeletedField
 * @property SellingManagerProductSpecificsType $SellingManagerProductSpecifics
 */
class ReviseSellingManagerProductRequestType extends AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'SellingManagerProductDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ],
        'SellingManagerFolderDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerFolderDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerFolderDetails'
        ],
        'DeletedField' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DeletedField'
        ],
        'SellingManagerProductSpecifics' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerProductSpecificsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductSpecifics'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'ReviseSellingManagerProductRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
