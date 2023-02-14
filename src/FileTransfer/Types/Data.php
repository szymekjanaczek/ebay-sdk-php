<?php

namespace DTS\eBaySDK\FileTransfer\Types;

use DTS\eBaySDK\Types\BaseType;

/**
 *
 * @property XopInclude $xopInclude
 */
class Data extends BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'xopInclude' => [
            'type'        => 'DTS\eBaySDK\FileTransfer\Types\XopInclude',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'xop:Include'
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
