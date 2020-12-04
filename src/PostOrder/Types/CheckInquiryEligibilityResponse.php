<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $earliestPossibleFilingDate
 * @property \DTS\eBaySDK\PostOrder\Types\EligibilityResponseError[] $errors
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $estimatedDeliveryDate
 * @property \DTS\eBaySDK\PostOrder\Enums\InquiryEligibilityStatusEnum $inquiryEligibilityStatus
 * @property string $inquiryId
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $latestPossibleFilingDate
 * @property \DTS\eBaySDK\PostOrder\Types\EligibilityResponseError[] $nonOverridableErrors
 * @property \DTS\eBaySDK\PostOrder\Enums\PaymentDenialReasonEnum $paypalReasonToDenyRequestFiling
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $returnFilingDate
 * @property string $returnId
 * @property \DTS\eBaySDK\PostOrder\Types\EligibilityResponseError[] $warnings
 */
class CheckInquiryEligibilityResponse extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'earliestPossibleFilingDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'earliestPossibleFilingDate',
        ],
        'errors' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\EligibilityResponseError',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors',
        ],
        'estimatedDeliveryDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'estimatedDeliveryDate',
        ],
        'inquiryEligibilityStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryEligibilityStatus',
        ],
        'inquiryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryId',
        ],
        'latestPossibleFilingDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'latestPossibleFilingDate',
        ],
        'nonOverridableErrors' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\EligibilityResponseError',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'nonOverridableErrors',
        ],
        'paypalReasonToDenyRequestFiling' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paypalReasonToDenyRequestFiling',
        ],
        'returnFilingDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnFilingDate',
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId',
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\EligibilityResponseError',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings',
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

        $this->setValues(__CLASS__, $childValues);
    }
}
