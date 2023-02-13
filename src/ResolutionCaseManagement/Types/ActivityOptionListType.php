<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property OfferOtherSolutionOptionType $offerOtherSolution
 * @property ProvideTrackingInfoOptionType $provideTrackingInfo
 * @property IssueFullRefundOptionType $issueFullRefund
 * @property IssuePartialRefundOptionType $issuePartialRefund
 * @property ProvideShippingInfoOptionType $provideShippingInfo
 * @property RequestBuyerToReturnOptionType $requestBuyerToReturn
 * @property ProvideShippingOrTrackingInfoOptionType $provideShippingOrTrackingInfo
 * @property ProvideRefundInfoOptionType $provideRefundInfo
 * @property ContactCustomerSupportOptionType $contactCustomerSupport
 * @property EscalateToCustomerSupportOptionType $escalateToCustomerSupport
 * @property AppealToCustomerSupportOptionType $appealToCustomerSupport
 */
class ActivityOptionListType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'offerOtherSolution' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offerOtherSolution'
        ],
        'provideTrackingInfo' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'provideTrackingInfo'
        ],
        'issueFullRefund' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'issueFullRefund'
        ],
        'issuePartialRefund' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'issuePartialRefund'
        ],
        'provideShippingInfo' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'provideShippingInfo'
        ],
        'requestBuyerToReturn' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\RequestBuyerToReturnOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'requestBuyerToReturn'
        ],
        'provideShippingOrTrackingInfo' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingOrTrackingInfoOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'provideShippingOrTrackingInfo'
        ],
        'provideRefundInfo' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'provideRefundInfo'
        ],
        'contactCustomerSupport' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ContactCustomerSupportOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'contactCustomerSupport'
        ],
        'escalateToCustomerSupport' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalateToCustomerSupport'
        ],
        'appealToCustomerSupport' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'appealToCustomerSupport'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
