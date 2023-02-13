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

use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property boolean $IncludeStockPhotoURL
 * @property boolean $UseStockPhotoURLAsGallery
 * @property string $StockPhotoURL
 * @property string[] $Copyright
 * @property string $ProductReferenceID
 * @property boolean $ReturnSearchResultOnDuplicates
 * @property string $ISBN
 * @property string $UPC
 * @property string $EAN
 * @property BrandMPNType $BrandMPN
 * @property TicketListingDetailsType $TicketListingDetails
 * @property boolean $UseFirstProduct
 * @property boolean $IncludeeBayProductDetails
 */
class ProductListingDetailsType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'IncludeStockPhotoURL' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeStockPhotoURL'
        ],
        'UseStockPhotoURLAsGallery' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UseStockPhotoURLAsGallery'
        ],
        'StockPhotoURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StockPhotoURL'
        ],
        'Copyright' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Copyright'
        ],
        'ProductReferenceID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductReferenceID'
        ],
        'ReturnSearchResultOnDuplicates' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnSearchResultOnDuplicates'
        ],
        'ISBN' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ISBN'
        ],
        'UPC' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UPC'
        ],
        'EAN' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ],
        'BrandMPN' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BrandMPNType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BrandMPN'
        ],
        'TicketListingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\TicketListingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TicketListingDetails'
        ],
        'UseFirstProduct' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UseFirstProduct'
        ],
        'IncludeeBayProductDetails' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeeBayProductDetails'
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
