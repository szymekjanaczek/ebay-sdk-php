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
 * @property string $Name
 * @property boolean $ListingNPEmailNotifPref
 * @property string $ListingNPEmail
 * @property string $ListingNPContactName
 * @property string $Mission
 * @property string $LogoURL
 * @property integer $CharityRegion
 * @property integer[] $CharityDomain
 * @property string $LogoURLSelling
 * @property boolean $DisplayLogoSelling
 * @property string $Description
 * @property string $ExternalID
 * @property integer $PopularityIndex
 * @property string $EIN
 * @property string $NonProfitSecondName
 * @property NonProfitAddressType[] $NonProfitAddress
 * @property NonProfitSocialAddressType[] $NonProfitSocialAddress
 * @property string $id
 */
class CharityInfoType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ],
        'ListingNPEmailNotifPref' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingNPEmailNotifPref'
        ],
        'ListingNPEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingNPEmail'
        ],
        'ListingNPContactName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingNPContactName'
        ],
        'Mission' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Mission'
        ],
        'LogoURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogoURL'
        ],
        'CharityRegion' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CharityRegion'
        ],
        'CharityDomain' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CharityDomain'
        ],
        'LogoURLSelling' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogoURLSelling'
        ],
        'DisplayLogoSelling' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisplayLogoSelling'
        ],
        'Description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'ExternalID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalID'
        ],
        'PopularityIndex' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PopularityIndex'
        ],
        'EIN' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIN'
        ],
        'NonProfitSecondName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NonProfitSecondName'
        ],
        'NonProfitAddress' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NonProfitAddressType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'NonProfitAddress'
        ],
        'NonProfitSocialAddress' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NonProfitSocialAddressType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'NonProfitSocialAddress'
        ],
        'id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'id'
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
