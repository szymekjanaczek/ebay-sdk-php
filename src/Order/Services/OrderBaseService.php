<?php

namespace DTS\eBaySDK\Order\Services;

use DTS\eBaySDK\Services\BaseRestService;

/**
 * Base class for the Order service.
 */
class OrderBaseService extends BaseRestService
{
    /**
     * @var array $endPoints The API endpoints.
     */
    protected static $endPoints = [
        'sandbox'    => 'https://api.sandbox.ebay.com/buy/order',
        'production' => 'https://apix.ebay.com/buy/order'
    ];

    /**
     * HTTP header constant. The Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    const HDR_AUTHORIZATION = 'Authorization';

    /**
     * HTTP header constant. The global ID of the eBay site on which the transaction took place.
     */
    const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

    /**
     * HTTP header constant. This header specifies the risk correlation ID, which is provided by a security software library.
     */
    const HDR_END_USER_CTX = 'X-EBAY-C-ENDUSERCTX';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array{apiVersion: array{valid: string[], default: string, required: true}, authorization: array{valid: string[], required: true}, marketplaceId: array{valid: string[]}, riskCorrelationId: array{valid: string[]}, compressResponse: array{valid: string[], default: false}, debug: array{valid: string[], fn: string, default: false}, httpHandler: array{valid: string[], default: string}, httpOptions: array{valid: string[], default: array{http_errors: false}}, requestLanguage: array{valid: string[]}, responseLanguage: array{valid: string[]}, sandbox: array{valid: string[], default: false}} An associative array of configuration definitions.
     */
    public static function getConfigDefinitions(): array
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion'        => [
                'valid'    => ['string'],
                'default'  => OrderService::API_VERSION,
                'required' => true
            ],
            'authorization'     => [
                'valid'    => ['string'],
                'required' => true
            ],
            'marketplaceId'     => [
                'valid' => ['string']
            ],
            'riskCorrelationId' => [
                'valid' => ['string']
            ]
        ];
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @return array An associative array of eBay HTTP headers.
     */
    protected function getEbayHeaders()
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_AUTHORIZATION] = 'Bearer ' . $this->getConfig('authorization');

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        if ($this->getConfig('riskCorrelationId')) {
            $headers[self::HDR_END_USER_CTX ] = 'deviceId=' . $this->getConfig('riskCorrelationId');
        }

        return $headers;
    }
}
