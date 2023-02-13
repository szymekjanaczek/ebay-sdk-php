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

use DTS\eBaySDK\Trading\Enums\CheckoutStatusCodeType;
use DTS\eBaySDK\Trading\Enums\SellingManagerPaidStatusCodeType;
use DTS\eBaySDK\Trading\Enums\SellingManagerShippedStatusCodeType;
use DTS\eBaySDK\Trading\Enums\PaymentStatusCodeType;
use DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType;
use DTS\eBaySDK\Trading\Enums\CommentTypeCodeType;
use DTS\eBaySDK\Trading\Enums\PaymentHoldStatusCodeType;
use DateTime;
use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property CheckoutStatusCodeType $CheckoutStatus
 * @property SellingManagerPaidStatusCodeType $PaidStatus
 * @property SellingManagerShippedStatusCodeType $ShippedStatus
 * @property PaymentStatusCodeType $eBayPaymentStatus
 * @property string $PayPalTransactionID
 * @property BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property CommentTypeCodeType $FeedbackReceived
 * @property boolean $FeedbackSent
 * @property integer $TotalEmailsSent
 * @property PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property string $SellerInvoiceNumber
 * @property DateTime $ShippedTime
 * @property DateTime $PaidTime
 * @property DateTime $LastEmailSentTime
 * @property DateTime $SellerInvoiceTime
 * @property boolean $IntegratedMerchantCreditCardEnabled
 */
class SellingManagerOrderStatusType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'CheckoutStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'PaidStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaidStatus'
        ],
        'ShippedStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedStatus'
        ],
        'eBayPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ],
        'PayPalTransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalTransactionID'
        ],
        'PaymentMethodUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ],
        'FeedbackReceived' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackReceived'
        ],
        'FeedbackSent' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackSent'
        ],
        'TotalEmailsSent' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalEmailsSent'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'SellerInvoiceNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerInvoiceNumber'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'PaidTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ],
        'LastEmailSentTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastEmailSentTime'
        ],
        'SellerInvoiceTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerInvoiceTime'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
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
