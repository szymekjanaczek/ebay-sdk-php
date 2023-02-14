<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\FileTransfer\Types;

/**
 *
 * @property string $taskReferenceId
 * @property string $fileReferenceId
 * @property string $fileFormat
 * @property FileAttachment $fileAttachment
 */
class UploadFileRequest extends BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'taskReferenceId' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'taskReferenceId'
        ],
        'fileReferenceId' => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'fileReferenceId'
        ],
        'fileFormat'      => [
            'type'        => 'string',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'fileFormat'
        ],
        'fileAttachment'  => [
            'type'        => 'DTS\eBaySDK\FileTransfer\Types\FileAttachment',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'fileAttachment'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'uploadFileRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
