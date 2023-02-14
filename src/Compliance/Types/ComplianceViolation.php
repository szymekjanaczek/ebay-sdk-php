<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Compliance\Types;

use DTS\eBaySDK\Compliance\Enums\ComplianceTypeEnum;
use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property ComplianceTypeEnum $complianceType
 * @property string $listingId
 * @property string $sku
 * @property string $offerId
 * @property ComplianceDetail[] $violations
 */
class ComplianceViolation extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'complianceType' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'complianceType'
        ],
        'listingId'      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'listingId'
        ],
        'sku'            => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'sku'
        ],
        'offerId'        => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'offerId'
        ],
        'violations'     => [
            'type'        => 'DTS\eBaySDK\Compliance\Types\ComplianceDetail',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'violations'
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
