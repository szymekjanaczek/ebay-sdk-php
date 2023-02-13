<?php
namespace DTS\eBaySDK\Types\Test;

use PHPUnit\Framework\TestCase;
use DTS\eBaySDK as Sdk;
/**
 * These tests are to cover where we have corrected
 * the property names of various classes.
 * These names have been incorrectly named in the documentation.
 * The names used for the properties are now taken from the actual response from the API.
 */
class PropertyFixesTest extends TestCase
{
    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/CancelSummary.html
     * Example of correct property names returned in the API https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html#Output
     * Example of correct property names returned in the API https://github.com/davidtsadler/ebay-sdk-php/issues/108
     */
    public function testCancelSummary(): void
    {
        $obj = new Sdk\PostOrder\Types\CancelSummary();

        $this->assertEquals(null, $obj->cancelState);
        $this->assertEquals(null, $obj->cancelStatus);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $obj->lineItems);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/ItemEligibilityResult.html
     * Example of correct property names returned in the API https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation__post.html#Samples
     */
    public function testItemEligibilityResult(): void
    {
        $obj = new Sdk\PostOrder\Types\ItemEligibilityResult();

        $obj->itemId = '123';
        $this->assertisString($obj->itemId);

        $obj->transactionId = '123';
        $this->assertisString($obj->transactionId);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/ErrorResponse.html#ErrorResponse
     * Example of correct property names returned in the API https://github.com/davidtsadler/ebay-sdk-php/issues/105
     */
    public function testError(): void
    {
        $obj = new Sdk\PostOrder\Types\Error();

        $obj->subdomain = '123';
        $this->assertisString($obj->subdomain);

        $obj->errorName = '123';
        $this->assertisString($obj->errorName);

        $obj->resolution = '123';
        $this->assertisString($obj->resolution);

        $obj->organization = '123';
        $this->assertisString($obj->organization);

        $obj->errorGroups = '123';
        $this->assertisString($obj->errorGroups);
    }

    public function testDeliveryCost(): void
    {
        $obj = new Sdk\Fulfillment\Types\DeliveryCost();

        $obj->discountAmount = new Sdk\Fulfillment\Types\Amount();
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Types\Amount', $obj->discountAmount);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/ShippingFulfillment.html
     * Example of correct property names returned in the API https://developer.ebay.com/devzone/rest/api-ref/fulfillment/order-orderid_shipping_fulfillment__get.html#Samples
     */
    public function testShippingServiceCode(): void
    {
        $obj = new Sdk\Fulfillment\Types\ShippingFulfillment();

        $obj->shippingServiceCode = 'foo';
        $this->assertisString($obj->shippingServiceCode);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/PricingSummary.html
     * Issue discussed at https://groups.google.com/forum/?hl=en-GB#!topic/ebay-sdk-php/Pz1s0K5V9ZE
     * Replace priceDiscountSubtotal with priceDiscount.
     */
    public function testPriceDiscount(): void
    {
        $obj = new Sdk\Fulfillment\Types\PricingSummary();

        $obj->priceDiscount = new Sdk\Fulfillment\Types\Amount();
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Types\Amount', $obj->priceDiscount);
    }

    public function testPriceDiscountSubtotalDoesNotExist(): void
    {
        $this->expectException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property');

        $obj = new Sdk\Fulfillment\Types\PricingSummary();

        $obj->priceDiscountSubtotal = new Sdk\Fulfillment\Types\Amount();
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/CancelDetail.html
     * Example of correct property names returned in the API https://github.com/davidtsadler/ebay-sdk-php/issues/107
     */
    public function testCancelDetail(): void
    {
        $obj = new Sdk\PostOrder\Types\CancelDetail();

        $this->assertEquals(null, $obj->cancelState);
        $this->assertEquals(null, $obj->cancelStatus);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/CancelActivityHistory.html
     * Example of correct property names returned in the API https://github.com/davidtsadler/ebay-sdk-php/issues/107
     */
    public function testCancelActivityHistory(): void
    {
        $obj = new Sdk\PostOrder\Types\CancelActivityHistory();

        $this->assertEquals(null, $obj->cancelStateFrom);
        $this->assertEquals(null, $obj->cancelStateTo);
        /** Yes this is because there is a typo in the actual response from the API! */
        $this->assertEquals(null, $obj->cancelStatetateTo);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/CancelSummary.html
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/OrderCancelLineItem.html
     * Example of correct property names returned in the API https://github.com/davidtsadler/ebay-sdk-php/issues/108
     *
     * This is a bit of an odd one. CancelSummary::lineItems does not exist. Yet the API is returning it.
     * Adding this property means that is needs a lineItem class. Since I didn't want to create a new one
     * I've re-used OrderCancelLineItem.
     */
    public function testOrderCancelLineItem(): void
    {
        $obj = new Sdk\PostOrder\Types\OrderCancelLineItem();

        $obj->itemTitle = 'foo';
        $this->assertisString($obj->itemTitle);

        $obj->cancelQuantity = 123;
        $this->assertisInt($obj->cancelQuantity);
    }

    /**
     * Even though the documentation says that GalleryURL is not a member of PictureDetailsType
     * it is been returned in the API for various calls. E.g GetItem and GetMyeBaySelling.
     */
    public function testGalleryURL(): void
    {
        $obj = new Sdk\Trading\Types\PictureDetailsType();

        $obj->GalleryURL = 'foo';
        $this->assertisString($obj->GalleryURL);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/UploadFileRequest.html
     * Issue: https://github.com/davidtsadler/ebay-sdk-php/issues/133
     * PR: https://github.com/davidtsadler/ebay-sdk-php/pull/134
     */
    public function testUploadFileRequest(): void
    {
        $obj = new Sdk\PostOrder\Types\UploadFileRequest();

        $obj->data = '';

        $this->assertisString($obj->data);
    }

    /**
     * Even though the documentation does not say this exists
     * someone did raise it as an issue and you can pass it via the explorer.
     *
     * https://github.com/davidtsadler/ebay-sdk-php/issues/154
     */
    public function testVerifyOnly(): void
    {
        $obj = new Sdk\Trading\Types\ReviseFixedPriceItemRequestType();

        $obj->VerifyOnly = true;
        $this->assertisBool($obj->VerifyOnly);

        $obj = new Sdk\Trading\Types\ReviseFixedPriceItemResponseType();

        $obj->VerifyOnly = true;
        $this->assertisBool($obj->VerifyOnly);
    }


    /**
     * Code generation is not including this attribute
     * as the WSDL contains NoCalls.
     * In future we won't be using the WSDLs so this will
     * be less of an issue.
     */
    public function testProductIDTypeAttribute(): void
    {
        $obj = new Sdk\Shopping\Types\ProductIDType();

        $obj->type = '';

        $this->assertisString($obj->type);
    }
}
