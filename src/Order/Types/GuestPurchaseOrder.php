<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Order\Types;

use DTS\eBaySDK\Order\Enums\PurchaseOrderPaymentStatusEnum;
use DTS\eBaySDK\Order\Enums\PurchaseOrderStatusEnum;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property LineItem[] $lineItems
 * @property PricingSummary $pricingSummary
 * @property string $purchaseOrderCreationDate
 * @property string $purchaseOrderId
 * @property PurchaseOrderPaymentStatusEnum $purchaseOrderPaymentStatus
 * @property PurchaseOrderStatusEnum $purchaseOrderStatus
 * @property Amount $refundedAmount
 * @property ErrorDetailV3[] $warnings
 */
class GuestPurchaseOrder extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'lineItems'                  => [
            'type'        => 'DTS\eBaySDK\Order\Types\LineItem',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'lineItems'
        ],
        'pricingSummary'             => [
            'type'        => 'DTS\eBaySDK\Order\Types\PricingSummary',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'pricingSummary'
        ],
        'purchaseOrderCreationDate'  => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'purchaseOrderCreationDate'
        ],
        'purchaseOrderId'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'purchaseOrderId'
        ],
        'purchaseOrderPaymentStatus' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'purchaseOrderPaymentStatus'
        ],
        'purchaseOrderStatus'        => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'purchaseOrderStatus'
        ],
        'refundedAmount'             => [
            'type'        => 'DTS\eBaySDK\Order\Types\Amount',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'refundedAmount'
        ],
        'warnings'                   => [
            'type'        => 'DTS\eBaySDK\Order\Types\ErrorDetailV3',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'warnings'
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
