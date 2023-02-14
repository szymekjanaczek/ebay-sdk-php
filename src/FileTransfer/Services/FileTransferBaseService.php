<?php

namespace DTS\eBaySDK\FileTransfer\Services;

use DTS\eBaySDK\Services\BaseService;
use DTS\eBaySDK\Types\BaseType;
use GuzzleHttp\Promise\PromiseInterface;
use DTS\eBaySDK\FileTransfer\Types\FileAttachment;
use DTS\eBaySDK\FileTransfer\Types\Data;
use DTS\eBaySDK\FileTransfer\Types\XopInclude;

/**
 * Base class for the FileTransfer service.
 */
class FileTransferBaseService extends BaseService
{
    /**
     * HTTP header constant. The API version your application supports.
     */
    const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';

    /**
     * HTTP header constant. The Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    const HDR_AUTH_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';

    /**
     * HTTP header constant. The name of the operation you are calling.
     */
    const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://storage.ebay.com/FileTransferService', 'https://storage.sandbox.ebay.com/FileTransferService', $config);
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array{apiVersion: array{valid: string[], default: string}, authToken: array{valid: string[], required: true}, profile: array{valid: string[], fn: string}, compressResponse: array{valid: string[], default: false}, credentials: array{valid: string[], fn: string, default: string[]}, debug: array{valid: string[], fn: string, default: false}, httpHandler: array{valid: string[], default: string}, httpOptions: array{valid: string[], default: never[]}, sandbox: array{valid: string[], default: false}} An associative array of configuration definitions.
     */
    public static function getConfigDefinitions(): array
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid'   => ['string'],
                'default' => FileTransferService::API_VERSION
            ],
            'authToken'  => [
                'valid'    => ['string'],
                'required' => true
            ]
        ];
    }

    /**
     * Sends an API request.
     *
     * This method overrides the parent so that it can modify
     * the request object before it is handled by the parent class.
     *
     * @param string $name The name of the operation.
     * @param BaseType $request Request object containing the request information.
     * @param string $responseClass The name of the PHP class that will be created from the XML response.
     *
     * @return PromiseInterface A promise that will be resolved with an object created from the XML response.
     */
    protected function callOperationAsync($name, BaseType $request, $responseClass)
    {
        /**
         * Modify the request object to add xop:Include element.
         */
        if ($name === 'uploadFile' && $request->hasAttachment()) {
            /**
             * Don't modify a request if the file attachment already exists.
             */
            if (!isset($request->fileAttachment)) {
                $request->fileAttachment = new FileAttachment();
            }

            if (!isset($request->fileAttachment->Data)) {
                $request->fileAttachment->Data = new Data([
                    'xopInclude' => new XopInclude([
                        'href' => 'cid:attachment.bin@devbay.net'
                    ])
                ]);
            }

            if (!isset($request->fileAttachment->Size)) {
                $attachment = $request->attachment();
                $request->fileAttachment->Size = strlen($attachment['data']);
            }
        }

        return parent::callOperationAsync($name, $request, $responseClass);
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @param string $operationName The name of the operation been called.
     *
     * @return array An associative array of eBay http headers.
     */
    protected function getEbayHeaders($operationName)
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_AUTH_TOKEN] = $this->getConfig('authToken');
        $headers[self::HDR_OPERATION_NAME] = $operationName;

        // Add optional headers.
        if ($this->getConfig('apiVersion')) {
            $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        }

        return $headers;
    }
}
