<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\BulkDataExchange\Types;

use DTS\eBaySDK\BulkDataExchange\Enums\AckValue;
use DateTime;
use DTS\eBaySDK\Types\BaseType;
/**
 *
 * @property AckValue $ack
 * @property ErrorMessage $errorMessage
 * @property string $version
 * @property DateTime $timestamp
 */
class BaseServiceResponse extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'ack' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ack'
        ],
        'errorMessage' => [
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\ErrorMessage',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'errorMessage'
        ],
        'version' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'version'
        ],
        'timestamp' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'timestamp'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
