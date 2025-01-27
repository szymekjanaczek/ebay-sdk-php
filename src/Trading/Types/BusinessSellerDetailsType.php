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

use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property AddressType $Address
 * @property string $Fax
 * @property string $Email
 * @property string $AdditionalContactInformation
 * @property string $TradeRegistrationNumber
 * @property boolean $LegalInvoice
 * @property string $TermsAndConditions
 * @property VATDetailsType $VATDetails
 */
class BusinessSellerDetailsType extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'Address'                      => [
            'type'        => 'DTS\eBaySDK\Trading\Types\AddressType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Address'
        ],
        'Fax'                          => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Fax'
        ],
        'Email'                        => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'Email'
        ],
        'AdditionalContactInformation' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'AdditionalContactInformation'
        ],
        'TradeRegistrationNumber'      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TradeRegistrationNumber'
        ],
        'LegalInvoice'                 => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'LegalInvoice'
        ],
        'TermsAndConditions'           => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'TermsAndConditions'
        ],
        'VATDetails'                   => [
            'type'        => 'DTS\eBaySDK\Trading\Types\VATDetailsType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'VATDetails'
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
