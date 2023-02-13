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
use DTS\eBaySDK\Trading\Enums\AdFormatLeadStatusCodeType;
use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property string $AdditionalInformation
 * @property AddressType $Address
 * @property string $BestTimeToCall
 * @property string $Email
 * @property DateTime $SubmittedTime
 * @property string $ItemID
 * @property string $ItemTitle
 * @property string $UserID
 * @property MemberMessageExchangeArrayType $MemberMessage
 * @property AdFormatLeadStatusCodeType $Status
 * @property string $ExternalEmail
 * @property string $PurchaseTimeFrame
 * @property string $TradeInYear
 * @property string $TradeInMake
 * @property string $TradeInModel
 * @property boolean $FinancingAnswer
 * @property boolean $Answer1
 * @property boolean $Answer2
 */
class AdFormatLeadType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AdditionalInformation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdditionalInformation'
        ],
        'Address' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Address'
        ],
        'BestTimeToCall' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestTimeToCall'
        ],
        'Email' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ],
        'SubmittedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SubmittedTime'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'ItemTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ],
        'UserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ],
        'MemberMessage' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MemberMessageExchangeArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MemberMessage'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'ExternalEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalEmail'
        ],
        'PurchaseTimeFrame' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PurchaseTimeFrame'
        ],
        'TradeInYear' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TradeInYear'
        ],
        'TradeInMake' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TradeInMake'
        ],
        'TradeInModel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TradeInModel'
        ],
        'FinancingAnswer' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FinancingAnswer'
        ],
        'Answer1' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Answer1'
        ],
        'Answer2' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Answer2'
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
