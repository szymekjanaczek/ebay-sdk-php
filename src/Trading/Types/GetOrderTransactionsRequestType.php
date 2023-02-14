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

use DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType;

/**
 *
 * @property ItemTransactionIDArrayType $ItemTransactionIDArray
 * @property OrderIDArrayType $OrderIDArray
 * @property TransactionPlatformCodeType $Platform
 * @property boolean $IncludeFinalValueFees
 */
class GetOrderTransactionsRequestType extends AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'ItemTransactionIDArray' => [
            'type'        => 'DTS\eBaySDK\Trading\Types\ItemTransactionIDArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'ItemTransactionIDArray'
        ],
        'OrderIDArray'           => [
            'type'        => 'DTS\eBaySDK\Trading\Types\OrderIDArrayType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'OrderIDArray'
        ],
        'Platform'               => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Platform'
        ],
        'IncludeFinalValueFees'  => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'IncludeFinalValueFees'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetOrderTransactionsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
