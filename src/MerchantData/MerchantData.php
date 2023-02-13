<?php
namespace DTS\eBaySDK\MerchantData;

use DTS\eBaySDK\Parser\XmlParser;
use DTS\eBaySDK\MerchantData\Types\BulkDataExchangeResponsesType;
use DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType;
use DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType;
use DTS\eBaySDK\MerchantData\Types\AddItemResponseType;
use DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType;
use DTS\eBaySDK\MerchantData\Types\EndItemResponseType;
use DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType;
use DTS\eBaySDK\MerchantData\Types\OrderAckResponseType;
use DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemResponseType;
use DTS\eBaySDK\MerchantData\Types\RelistItemResponseType;
use DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType;
use DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusResponseType;
use DTS\eBaySDK\MerchantData\Types\ReviseItemResponseType;
use DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoResponseType;
use DTS\eBaySDK\MerchantData\Types\SoldReportResponseType;
use DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType;
use DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType;
use DTS\eBaySDK\MerchantData\Types\VerifyAddItemResponseType;
/**
 * Unlike other services there is no MerchantData service class as all operations
 * are performed via other services.
 *
 * This class is to help client code parse the XML that has been returned via an
 * attachment in a LMS response.
 */
class MerchantData
{
    /**
     * @var XmlParser
     */
    private $xmlParser;

    public function __construct()
    {
        $this->xmlParser = new XmlParser('\DTS\eBaySDK\MerchantData\Types\BulkDataExchangeResponsesType');
    }

    /**
     * @param string $xml
     *
     * @return BulkDataExchangeResponsesType
     */
    public function bulkDataExchangeResponses($xml)
    {
        return $this->parseXml($xml);
    }

    /**
     * @param string $xml
     *
     * @return ActiveInventoryReportResponseType
     */
    public function activeInventoryReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ActiveInventoryReport;
    }

    /**
     * @param string $xml
     *
     * @return AddFixedPriceItemResponseType[]
     */
    public function addFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->AddFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return AddItemResponseType[]
     */
    public function addItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->AddItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return EndFixedPriceItemResponseType[]
     */
    public function endFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->EndFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return EndItemResponseType[]
     */
    public function endItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->EndItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return FeeSettlementReportResponseType
     */
    public function feeSettlementReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->FeeSettlementReport;
    }

    /**
     * @param string $xml
     *
     * @return OrderAckResponseType[]
     */
    public function orderAck($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->OrderAckResponse;
    }

    /**
     * @param string $xml
     *
     * @return RelistFixedPriceItemResponseType[]
     */
    public function relistFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->RelistFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return RelistItemResponseType[]
     */
    public function relistItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->RelistItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return ReviseFixedPriceItemResponseType[]
     */
    public function reviseFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return ReviseInventoryStatusResponseType[]
     */
    public function reviseInventoryStatus($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseInventoryStatusResponse;
    }

    /**
     * @param string $xml
     *
     * @return ReviseItemResponseType[]
     */
    public function reviseItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return SetShipmentTrackingInfoResponseType[]
     */
    public function setShipmentTrackingInfo($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->SetShipmentTrackingInfoResponse;
    }

    /**
     * @param string $xml
     *
     * @return SoldReportResponseType
     */
    public function soldReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->SoldReport;
    }

    /**
     * @param string $xml
     *
     * @return UploadSiteHostedPicturesResponseType[]
     */
    public function uploadSiteHostedPictures($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->UploadSiteHostedPicturesResponse;
    }

    /**
     * @param string $xml
     *
     * @return VerifyAddFixedPriceItemResponseType[]
     */
    public function verifyAddFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return VerifyAddItemResponseType[]
     */
    public function verifyAddItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return BulkDataExchangeResponsesType
     */
    private function parseXml($xml)
    {
        return $this->xmlParser->parse($xml);
    }
}
