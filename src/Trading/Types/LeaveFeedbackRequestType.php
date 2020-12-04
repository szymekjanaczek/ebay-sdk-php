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
 * @property string $ItemID
 * @property string $CommentText
 * @property \DTS\eBaySDK\Trading\Enums\CommentTypeCodeType $CommentType
 * @property string $TransactionID
 * @property string $TargetUser
 * @property \DTS\eBaySDK\Trading\Types\ItemRatingDetailArrayType $SellerItemRatingDetailArray
 * @property string $OrderLineItemID
 * @property \DTS\eBaySDK\Trading\Enums\ItemArrivedWithinEDDCodeType $ItemArrivedWithinEDDType
 * @property boolean $ItemDeliveredWithinEDD
 */
class LeaveFeedbackRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
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
        'CommentText' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CommentText',
        ],
        'CommentType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CommentType',
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID',
        ],
        'TargetUser' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TargetUser',
        ],
        'SellerItemRatingDetailArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemRatingDetailArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerItemRatingDetailArray',
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID',
        ],
        'ItemArrivedWithinEDDType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemArrivedWithinEDDType',
        ],
        'ItemDeliveredWithinEDD' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemDeliveredWithinEDD',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'LeaveFeedbackRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
