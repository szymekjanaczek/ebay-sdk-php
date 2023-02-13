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

use DTS\eBaySDK\MerchantData\Enums\PaymentStatusCodeType;
use DTS\eBaySDK\MerchantData\Enums\CheckoutStatusCodeType;
use DateTime;
use DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType;
use DTS\eBaySDK\MerchantData\Enums\CompleteStatusCodeType;
use DTS\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType;
use DTS\eBaySDK\MerchantData\Enums\InquiryStatusCodeType;
use DTS\eBaySDK\MerchantData\Enums\ReturnStatusCodeType;
use DTS\eBaySDK\MerchantData\Enums\BuyerPaymentInstrumentCodeType;
use DTS\eBaySDK\MerchantData\Enums\DigitalStatusCodeType;
use DTS\eBaySDK\MerchantData\Enums\CancelStatusCodeType;
use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property PaymentStatusCodeType $eBayPaymentStatus
 * @property CheckoutStatusCodeType $CheckoutStatus
 * @property DateTime $LastTimeModified
 * @property BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property CompleteStatusCodeType $CompleteStatus
 * @property boolean $BuyerSelectedShipping
 * @property PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property InquiryStatusCodeType $InquiryStatus
 * @property ReturnStatusCodeType $ReturnStatus
 * @property BuyerPaymentInstrumentCodeType $PaymentInstrument
 * @property DigitalStatusCodeType $DigitalStatus
 * @property CancelStatusCodeType $CancelStatus
 */
class TransactionStatusType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'eBayPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ],
        'CheckoutStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'LastTimeModified' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastTimeModified'
        ],
        'PaymentMethodUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ],
        'CompleteStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CompleteStatus'
        ],
        'BuyerSelectedShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerSelectedShipping'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'InquiryStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InquiryStatus'
        ],
        'ReturnStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnStatus'
        ],
        'PaymentInstrument' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstrument'
        ],
        'DigitalStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DigitalStatus'
        ],
        'CancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
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
