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
 * @property boolean $proofOfShipmentUploaded
 * @property Text $sellerComments
 * @property boolean $shippedWithTracking
 * @property string $shippingCarrierName
 * @property DateTime $shippingDate
 * @property string $trackingNumber
 */
class ShipmentInfoRequest extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'proofOfShipmentUploaded' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'proofOfShipmentUploaded'
        ],
        'sellerComments' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\Text',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerComments'
        ],
        'shippedWithTracking' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippedWithTracking'
        ],
        'shippingCarrierName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCarrierName'
        ],
        'shippingDate' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingDate'
        ],
        'trackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'trackingNumber'
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
