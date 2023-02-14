<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Browse\Types;

use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property string $email
 * @property string $fax
 * @property string $imprint
 * @property string $legalContactFirstName
 * @property string $legalContactLastName
 * @property string $name
 * @property string $phone
 * @property string $registrationNumber
 * @property LegalAddress $sellerProvidedLegalAddress
 * @property string $termsOfService
 * @property VatDetail[] $vatDetails
 */
class SellerLegalInfo extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'email'                      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'email'
        ],
        'fax'                        => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'fax'
        ],
        'imprint'                    => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'imprint'
        ],
        'legalContactFirstName'      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'legalContactFirstName'
        ],
        'legalContactLastName'       => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'legalContactLastName'
        ],
        'name'                       => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'name'
        ],
        'phone'                      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'phone'
        ],
        'registrationNumber'         => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'registrationNumber'
        ],
        'sellerProvidedLegalAddress' => [
            'type'        => 'DTS\eBaySDK\Browse\Types\LegalAddress',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sellerProvidedLegalAddress'
        ],
        'termsOfService'             => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'termsOfService'
        ],
        'vatDetails'                 => [
            'type'        => 'DTS\eBaySDK\Browse\Types\VatDetail',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'vatDetails'
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
