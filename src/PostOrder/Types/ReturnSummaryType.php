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

use DTS\eBaySDK\PostOrder\Enums\ReturnTypeEnum;
use DTS\eBaySDK\PostOrder\Enums\DispositionRuleTemplateTypeEnum;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property AvailableOptionType[] $buyerAvailableOptions
 * @property string $buyerLoginName
 * @property ReturnResponseDueType $buyerResponseDue
 * @property TotalRefundAmountType $buyerTotalRefund
 * @property ReturnCreationInfoType $creationInfo
 * @property ReturnTypeEnum $currentType
 * @property DispositionRuleTemplateTypeEnum[] $dispositionRuleTriggered
 * @property EscalationInfoType $escalationInfo
 * @property string $returnId
 * @property ReturnPolicyType $returnPolicy
 * @property AvailableOptionType[] $sellerAvailableOptions
 * @property string $sellerLoginName
 * @property ReturnResponseDueType $sellerResponseDue
 * @property TotalRefundAmountType $sellerTotalRefund
 * @property string $state
 * @property string $status
 */
class ReturnSummaryType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'buyerAvailableOptions'    => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\AvailableOptionType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'buyerAvailableOptions'
        ],
        'buyerLoginName'           => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'buyerLoginName'
        ],
        'buyerResponseDue'         => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnResponseDueType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'buyerResponseDue'
        ],
        'buyerTotalRefund'         => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\TotalRefundAmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'buyerTotalRefund'
        ],
        'creationInfo'             => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnCreationInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'creationInfo'
        ],
        'currentType'              => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'currentType'
        ],
        'dispositionRuleTriggered' => [
            'type'        => 'string',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'dispositionRuleTriggered'
        ],
        'escalationInfo'           => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\EscalationInfoType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'escalationInfo'
        ],
        'returnId'                 => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnId'
        ],
        'returnPolicy'             => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnPolicyType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'returnPolicy'
        ],
        'sellerAvailableOptions'   => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\AvailableOptionType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'sellerAvailableOptions'
        ],
        'sellerLoginName'          => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerLoginName'
        ],
        'sellerResponseDue'        => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\ReturnResponseDueType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerResponseDue'
        ],
        'sellerTotalRefund'        => [
            'type'        => 'DTS\eBaySDK\PostOrder\Types\TotalRefundAmountType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerTotalRefund'
        ],
        'state'                    => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'state'
        ],
        'status'                   => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'status'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
