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
 * @property \DTS\eBaySDK\PostOrder\Types\RefundDetailType $actualRefund
 * @property \DTS\eBaySDK\PostOrder\Enums\ReturnRefundInitiatorEnum $refundInitiationType
 * @property \DTS\eBaySDK\PostOrder\Types\DateTime $refundIssuedDate
 * @property string $refundStatus
 */
class ActualRefundDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'actualRefund' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\RefundDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actualRefund',
        ],
        'refundInitiationType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundInitiationType',
        ],
        'refundIssuedDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundIssuedDate',
        ],
        'refundStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundStatus',
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
