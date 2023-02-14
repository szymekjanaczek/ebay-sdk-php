<?php

namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Services\TradingService;
use DTS\eBaySDK\Trading\Types\UploadSiteHostedPicturesRequestType;
use DTS\eBaySDK\Trading\Services;
use DTS\eBaySDK\Trading\Types;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class MultipartFormDataTest extends TestCase
{
    private HttpHandler $httpHandler;

    private TradingService $service;

    private UploadSiteHostedPicturesRequestType $request;

    private string $requestXml;

    protected function setUp(): void
    {
        /**
         * Use a class that will fake sending requests and getting responses.
         * The idea is that all the information needed to make the request is
         * passed to the client by the service. What we want to test is that the
         * is actually passed correctly. We are not testing the sending of the request
         * over the internet.
         * The HttpHandler contains properties that will be set when the service
         * makes the request. We can test these properties to check what the service is passing.
         */
        $this->httpHandler = new HttpHandler();
        $this->service = new TradingService([
            'apiVersion'  => '123',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId'      => 0,
            'httpHandler' => $this->httpHandler
        ]);
        $this->request = new UploadSiteHostedPicturesRequestType();
        $this->request->PictureName = 'Example Picture';
        $this->requestXml = rtrim(file_get_contents(__DIR__ . '/../../Mocks/MultipartFormDataRequest'));
    }

    public function testHttpHeadersAreCreated(): void
    {
        $this->request->attachment('ABC123', 'image/jpeg');
        $this->service->uploadSiteHostedPictures($this->request);
        $this->assertArrayHasKey('Content-Type', $this->httpHandler->headers);
        $this->assertEquals('multipart/form-data;boundary="boundary"', $this->httpHandler->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $this->httpHandler->headers);
        $this->assertEquals(strlen($this->requestXml), $this->httpHandler->headers['Content-Length']);
    }

    public function testMultipartFormDataIsCreated(): void
    {
        $this->request->attachment('ABC123', 'image/jpeg');
        $this->service->uploadSiteHostedPictures($this->request);
        $this->assertEquals($this->requestXml, $this->httpHandler->body);
    }
}
