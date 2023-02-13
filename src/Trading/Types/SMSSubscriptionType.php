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

use DTS\eBaySDK\Trading\Enums\SMSSubscriptionUserStatusCodeType;
use DTS\eBaySDK\Trading\Enums\WirelessCarrierIDCodeType;
use DTS\eBaySDK\Trading\Enums\SMSSubscriptionErrorCodeCodeType;
use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property string $SMSPhone
 * @property SMSSubscriptionUserStatusCodeType $UserStatus
 * @property WirelessCarrierIDCodeType $CarrierID
 * @property SMSSubscriptionErrorCodeCodeType $ErrorCode
 * @property string $ItemToUnsubscribe
 */
class SMSSubscriptionType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SMSPhone' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SMSPhone'
        ],
        'UserStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserStatus'
        ],
        'CarrierID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CarrierID'
        ],
        'ErrorCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorCode'
        ],
        'ItemToUnsubscribe' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemToUnsubscribe'
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
