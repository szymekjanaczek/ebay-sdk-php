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

/**
 *
 * @property string $VariationSpecificValue
 * @property string[] $PictureURL
 * @property string[] $ExternalPictureURL
 * @property \DTS\eBaySDK\MerchantData\Types\ExtendedPictureDetailsType $ExtendedPictureDetails
 */
class VariationSpecificPictureSetType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'VariationSpecificValue' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecificValue',
        ],
        'PictureURL' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PictureURL',
        ],
        'ExternalPictureURL' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalPictureURL',
        ],
        'ExtendedPictureDetails' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ExtendedPictureDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedPictureDetails',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
