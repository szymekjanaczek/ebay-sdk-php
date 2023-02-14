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

use DateTime;

/**
 *
 * @property string $UserID
 * @property DateTime $StartTimeFrom
 * @property DateTime $StartTimeTo
 * @property DateTime $EndTimeFrom
 * @property DateTime $EndTimeTo
 * @property DateTime $ModTimeFrom
 * @property DateTime $ModTimeTo
 * @property boolean $NewItemFilter
 * @property boolean $IncludeWatchCount
 * @property boolean $IncludeVariationSpecifics
 * @property boolean $HideVariations
 */
class GetSellerEventsRequestType extends AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'UserID'                    => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UserID'
        ],
        'StartTimeFrom'             => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StartTimeFrom'
        ],
        'StartTimeTo'               => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'StartTimeTo'
        ],
        'EndTimeFrom'               => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EndTimeFrom'
        ],
        'EndTimeTo'                 => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EndTimeTo'
        ],
        'ModTimeFrom'               => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ModTimeFrom'
        ],
        'ModTimeTo'                 => [
            'type'        => 'DateTime',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ModTimeTo'
        ],
        'NewItemFilter'             => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'NewItemFilter'
        ],
        'IncludeWatchCount'         => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'IncludeWatchCount'
        ],
        'IncludeVariationSpecifics' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'IncludeVariationSpecifics'
        ],
        'HideVariations'            => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'HideVariations'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellerEventsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
