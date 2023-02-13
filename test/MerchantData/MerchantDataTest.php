<?php
namespace DTS\eBaySDK\Test\MerchantData;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\MerchantData\MerchantData;

class MerchantDataTest extends TestCase
{
    private MerchantData $merchantData;

    protected function setUp(): void
    {
        $this->merchantData = new MerchantData();
    }

    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\MerchantData', $this->merchantData);
    }

    public function testActiveInventoryReport(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ActiveInventoryReport.xml');
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType', $this->merchantData->activeInventoryReport($xml));
    }

    public function testAddFixedPriceItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/AddFixedPriceItem.xml');
        $responses = $this->merchantData->addFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType', $response);
        }
    }

    public function testAddItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/AddItem.xml');
        $responses = $this->merchantData->addItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AddItemResponseType', $response);
        }
    }

    public function testEndFixedPriceItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/EndFixedPriceItem.xml');
        $responses = $this->merchantData->endFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType', $response);
        }
    }

    public function testEndItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/EndItem.xml');
        $responses = $this->merchantData->endItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\EndItemResponseType', $response);
        }
    }

    public function testFeeSettlementReport(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/FeeSettlementReport.xml');
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType', $this->merchantData->feeSettlementReport($xml));
    }

    public function testOrderAck(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/OrderAck.xml');
        $responses = $this->merchantData->orderAck($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\OrderAckResponseType', $response);
        }
    }

    public function testRelistFixedPriceItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/RelistFixedPriceItem.xml');
        $responses = $this->merchantData->relistFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemResponseType', $response);
        }
    }

    public function testRelistItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/RelistItem.xml');
        $responses = $this->merchantData->relistItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\RelistItemResponseType', $response);
        }
    }

    public function testReviseFixedPriceItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseFixedPriceItem.xml');
        $responses = $this->merchantData->reviseFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType', $response);
        }
    }

    public function testReviseInventoryStatus(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseInventoryStatus.xml');
        $responses = $this->merchantData->reviseInventoryStatus($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusResponseType', $response);
        }
    }

    public function testReviseItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseItem.xml');
        $responses = $this->merchantData->reviseItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ReviseItemResponseType', $response);
        }
    }

    public function testSetShipmentTrackingInfo(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/SetShipmentTrackingInfo.xml');
        $responses = $this->merchantData->setShipmentTrackingInfo($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoResponseType', $response);
        }
    }

    public function testSoldReport(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/SoldReport.xml');
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\SoldReportResponseType', $this->merchantData->soldReport($xml));
    }

    public function testUploadSiteHostedPictures(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/UploadSiteHostedPictures.xml');
        $responses = $this->merchantData->uploadSiteHostedPictures($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType', $response);
        }
    }

    public function testVerifyAddFixedPriceItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/VerifyAddFixedPriceItem.xml');
        $responses = $this->merchantData->verifyAddFixedPriceItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType', $response);
        }
    }

    public function testVerifyAddItem(): void
    {
        $xml = file_get_contents(__DIR__.'/Mocks/VerifyAddItem.xml');
        $responses = $this->merchantData->verifyAddItem($xml);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\VerifyAddItemResponseType', $response);
        }
    }
}
