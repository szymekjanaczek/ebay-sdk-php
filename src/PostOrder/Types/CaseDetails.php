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

use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property string $buyerFinalAcceptResolution
 * @property string $buyerInitExpectResolution
 * @property DateTime $creationDate
 * @property DateTime $escalationDate
 * @property DateTime $expirationDate
 * @property DateTime $lastBuyerRespDate
 * @property DateTime $lastSellerRespDate
 * @property boolean $paypalPaid
 * @property RefundAmounts $refundAmounts
 * @property DateTime $refundDeadlineDate
 * @property RefundType $refundType
 */
class CaseDetails extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'buyerFinalAcceptResolution' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerFinalAcceptResolution'
        ],
        'buyerInitExpectResolution' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerInitExpectResolution'
        ],
        'creationDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalationDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationDate'
        ],
        'expirationDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expirationDate'
        ],
        'lastBuyerRespDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastBuyerRespDate'
        ],
        'lastSellerRespDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastSellerRespDate'
        ],
        'paypalPaid' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paypalPaid'
        ],
        'refundAmounts' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\RefundAmounts',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundAmounts'
        ],
        'refundDeadlineDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundDeadlineDate'
        ],
        'refundType' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\RefundType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundType'
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
