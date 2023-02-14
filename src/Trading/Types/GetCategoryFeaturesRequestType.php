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

use DTS\eBaySDK\Trading\Enums\FeatureIDCodeType;

/**
 *
 * @property string $CategoryID
 * @property integer $LevelLimit
 * @property boolean $ViewAllNodes
 * @property FeatureIDCodeType[] $FeatureID
 * @property boolean $AllFeaturesForCategory
 */
class GetCategoryFeaturesRequestType extends AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'CategoryID'             => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CategoryID'
        ],
        'LevelLimit'             => [
            'type'        => 'integer',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'LevelLimit'
        ],
        'ViewAllNodes'           => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ViewAllNodes'
        ],
        'FeatureID'              => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'FeatureID'
        ],
        'AllFeaturesForCategory' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'AllFeaturesForCategory'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetCategoryFeaturesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
