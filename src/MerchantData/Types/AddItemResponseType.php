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
 * @property string $ItemID
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property \DTS\eBaySDK\MerchantData\Types\FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property \DTS\eBaySDK\MerchantData\Enums\DiscountReasonCodeType[] $DiscountReason
 * @property \DTS\eBaySDK\MerchantData\Types\ProductSuggestionsType $ProductSuggestions
 * @property \DTS\eBaySDK\MerchantData\Types\ListingRecommendationsType $ListingRecommendations
 */
class AddItemResponseType extends \DTS\eBaySDK\MerchantData\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID',
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime',
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime',
        ],
        'Fees' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\FeesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Fees',
        ],
        'CategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID',
        ],
        'Category2ID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Category2ID',
        ],
        'DiscountReason' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DiscountReason',
        ],
        'ProductSuggestions' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ProductSuggestionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductSuggestions',
        ],
        'ListingRecommendations' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ListingRecommendationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingRecommendations',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'AddItemResponse';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
