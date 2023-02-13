<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Order\Services;

use DTS\eBaySDK\Order\Types\GetCheckoutSessionRestRequest;
use DTS\eBaySDK\Order\Types\GetCheckoutSessionRestResponse;
use GuzzleHttp\Promise\PromiseInterface;
use DTS\eBaySDK\Order\Types\InitiateCheckoutSessionRestRequest;
use DTS\eBaySDK\Order\Types\InitiateCheckoutSessionRestResponse;
use DTS\eBaySDK\Order\Types\PlaceOrderRestRequest;
use DTS\eBaySDK\Order\Types\PlaceOrderRestResponse;
use DTS\eBaySDK\Order\Types\UpdatePaymentInfoRestRequest;
use DTS\eBaySDK\Order\Types\UpdatePaymentInfoRestResponse;
use DTS\eBaySDK\Order\Types\UpdateQuantityForLineItemRestRequest;
use DTS\eBaySDK\Order\Types\UpdateQuantityForLineItemRestResponse;
use DTS\eBaySDK\Order\Types\UpdateShippingAddressRestRequest;
use DTS\eBaySDK\Order\Types\UpdateShippingAddressRestResponse;
use DTS\eBaySDK\Order\Types\UpdateShippingOptionRestRequest;
use DTS\eBaySDK\Order\Types\UpdateShippingOptionRestResponse;
use DTS\eBaySDK\Order\Types\GetGuestCheckoutSessionRestRequest;
use DTS\eBaySDK\Order\Types\GetGuestCheckoutSessionRestResponse;
use DTS\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestRequest;
use DTS\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestResponse;
use DTS\eBaySDK\Order\Types\PlaceGuestOrderRestRequest;
use DTS\eBaySDK\Order\Types\PlaceGuestOrderRestResponse;
use DTS\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest;
use DTS\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestResponse;
use DTS\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest;
use DTS\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestResponse;
use DTS\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest;
use DTS\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestResponse;
use DTS\eBaySDK\Order\Types\UpdateGuestShippingOptionRestRequest;
use DTS\eBaySDK\Order\Types\UpdateGuestShippingOptionRestResponse;
use DTS\eBaySDK\Order\Types\GetGuestPurchaseOrderRestRequest;
use DTS\eBaySDK\Order\Types\GetGuestPurchaseOrderRestResponse;
use DTS\eBaySDK\Order\Types\GetPurchaseOrderRestRequest;
use DTS\eBaySDK\Order\Types\GetPurchaseOrderRestResponse;
class OrderService extends OrderBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetCheckoutSession' => [
            'method' => 'GET',
            'resource' => 'checkout_session/{checkoutSessionId}',
            'responseClass' => '\DTS\eBaySDK\Order\Types\GetCheckoutSessionRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'InitiateCheckoutSession' => [
            'method' => 'POST',
            'resource' => 'checkout_session/initiate',
            'responseClass' => '\DTS\eBaySDK\Order\Types\InitiateCheckoutSessionRestResponse',
            'params' => [
            ]
        ],
        'PlaceOrder' => [
            'method' => 'POST',
            'resource' => 'checkout_session/{checkoutSessionId}/place_order',
            'responseClass' => '\DTS\eBaySDK\Order\Types\PlaceOrderRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdatePaymentInfo' => [
            'method' => 'POST',
            'resource' => 'checkout_session/{checkoutSessionId}/update_payment_info',
            'responseClass' => '\DTS\eBaySDK\Order\Types\UpdatePaymentInfoRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateQuantityForLineItem' => [
            'method' => 'POST',
            'resource' => 'checkout_session/{checkoutSessionId}/update_quantity',
            'responseClass' => '\DTS\eBaySDK\Order\Types\UpdateQuantityForLineItemRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateShippingAddress' => [
            'method' => 'POST',
            'resource' => '_session/{checkoutSessionId}/update_shipping_address',
            'responseClass' => '\DTS\eBaySDK\Order\Types\UpdateShippingAddressRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateShippingOption' => [
            'method' => 'POST',
            'resource' => 'checkout_session/{checkoutSessionId}/update_shipping_option',
            'responseClass' => '\DTS\eBaySDK\Order\Types\UpdateShippingOptionRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetGuestCheckoutSession' => [
            'method' => 'GET',
            'resource' => 'guest_checkout_session/{checkoutSessionId}',
            'responseClass' => '\DTS\eBaySDK\Order\Types\GetGuestCheckoutSessionRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'InitiateGuestCheckoutSession' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/initiate',
            'responseClass' => '\DTS\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestResponse',
            'params' => [
            ]
        ],
        'PlaceGuestOrder' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/place_order',
            'responseClass' => '\DTS\eBaySDK\Order\Types\PlaceGuestOrderRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateGuestLineItemQuantity' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/update_quantity',
            'responseClass' => '\DTS\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateGuestLineItemShippingAddress' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/update_shipping_address',
            'responseClass' => '\DTS\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateGuestPaymentInfo' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/update_payment_info',
            'responseClass' => '\DTS\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateGuestShippingOption' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/update_shipping_option',
            'responseClass' => '\DTS\eBaySDK\Order\Types\UpdateGuestShippingOptionRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetGuestPurchaseOrder' => [
            'method' => 'GET',
            'resource' => 'guest_purchase_order/{purchaseOrderId}',
            'responseClass' => '\DTS\eBaySDK\Order\Types\GetGuestPurchaseOrderRestResponse',
            'params' => [
                'purchaseOrderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPurchaseOrder' => [
            'method' => 'GET',
            'resource' => 'purchase_order/{purchaseOrderId}',
            'responseClass' => '\DTS\eBaySDK\Order\Types\GetPurchaseOrderRestResponse',
            'params' => [
                'purchaseOrderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param GetCheckoutSessionRestRequest $request
     * @return GetCheckoutSessionRestResponse
     */
    public function getCheckoutSession(GetCheckoutSessionRestRequest $request)
    {
        return $this->getCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param GetCheckoutSessionRestRequest $request
     * @return PromiseInterface
     */
    public function getCheckoutSessionAsync(GetCheckoutSessionRestRequest $request)
    {
        return $this->callOperationAsync('GetCheckoutSession', $request);
    }

    /**
     * @param InitiateCheckoutSessionRestRequest $request
     * @return InitiateCheckoutSessionRestResponse
     */
    public function initiateCheckoutSession(InitiateCheckoutSessionRestRequest $request)
    {
        return $this->initiateCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param InitiateCheckoutSessionRestRequest $request
     * @return PromiseInterface
     */
    public function initiateCheckoutSessionAsync(InitiateCheckoutSessionRestRequest $request)
    {
        return $this->callOperationAsync('InitiateCheckoutSession', $request);
    }

    /**
     * @param PlaceOrderRestRequest $request
     * @return PlaceOrderRestResponse
     */
    public function placeOrder(PlaceOrderRestRequest $request)
    {
        return $this->placeOrderAsync($request)->wait();
    }

    /**
     * @param PlaceOrderRestRequest $request
     * @return PromiseInterface
     */
    public function placeOrderAsync(PlaceOrderRestRequest $request)
    {
        return $this->callOperationAsync('PlaceOrder', $request);
    }

    /**
     * @param UpdatePaymentInfoRestRequest $request
     * @return UpdatePaymentInfoRestResponse
     */
    public function updatePaymentInfo(UpdatePaymentInfoRestRequest $request)
    {
        return $this->updatePaymentInfoAsync($request)->wait();
    }

    /**
     * @param UpdatePaymentInfoRestRequest $request
     * @return PromiseInterface
     */
    public function updatePaymentInfoAsync(UpdatePaymentInfoRestRequest $request)
    {
        return $this->callOperationAsync('UpdatePaymentInfo', $request);
    }

    /**
     * @param UpdateQuantityForLineItemRestRequest $request
     * @return UpdateQuantityForLineItemRestResponse
     */
    public function updateQuantityForLineItem(UpdateQuantityForLineItemRestRequest $request)
    {
        return $this->updateQuantityForLineItemAsync($request)->wait();
    }

    /**
     * @param UpdateQuantityForLineItemRestRequest $request
     * @return PromiseInterface
     */
    public function updateQuantityForLineItemAsync(UpdateQuantityForLineItemRestRequest $request)
    {
        return $this->callOperationAsync('UpdateQuantityForLineItem', $request);
    }

    /**
     * @param UpdateShippingAddressRestRequest $request
     * @return UpdateShippingAddressRestResponse
     */
    public function updateShippingAddress(UpdateShippingAddressRestRequest $request)
    {
        return $this->updateShippingAddressAsync($request)->wait();
    }

    /**
     * @param UpdateShippingAddressRestRequest $request
     * @return PromiseInterface
     */
    public function updateShippingAddressAsync(UpdateShippingAddressRestRequest $request)
    {
        return $this->callOperationAsync('UpdateShippingAddress', $request);
    }

    /**
     * @param UpdateShippingOptionRestRequest $request
     * @return UpdateShippingOptionRestResponse
     */
    public function updateShippingOption(UpdateShippingOptionRestRequest $request)
    {
        return $this->updateShippingOptionAsync($request)->wait();
    }

    /**
     * @param UpdateShippingOptionRestRequest $request
     * @return PromiseInterface
     */
    public function updateShippingOptionAsync(UpdateShippingOptionRestRequest $request)
    {
        return $this->callOperationAsync('UpdateShippingOption', $request);
    }

    /**
     * @param GetGuestCheckoutSessionRestRequest $request
     * @return GetGuestCheckoutSessionRestResponse
     */
    public function getGuestCheckoutSession(GetGuestCheckoutSessionRestRequest $request)
    {
        return $this->getGuestCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param GetGuestCheckoutSessionRestRequest $request
     * @return PromiseInterface
     */
    public function getGuestCheckoutSessionAsync(GetGuestCheckoutSessionRestRequest $request)
    {
        return $this->callOperationAsync('GetGuestCheckoutSession', $request);
    }

    /**
     * @param InitiateGuestCheckoutSessionRestRequest $request
     * @return InitiateGuestCheckoutSessionRestResponse
     */
    public function initiateGuestCheckoutSession(InitiateGuestCheckoutSessionRestRequest $request)
    {
        return $this->initiateGuestCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param InitiateGuestCheckoutSessionRestRequest $request
     * @return PromiseInterface
     */
    public function initiateGuestCheckoutSessionAsync(InitiateGuestCheckoutSessionRestRequest $request)
    {
        return $this->callOperationAsync('InitiateGuestCheckoutSession', $request);
    }

    /**
     * @param PlaceGuestOrderRestRequest $request
     * @return PlaceGuestOrderRestResponse
     */
    public function placeGuestOrder(PlaceGuestOrderRestRequest $request)
    {
        return $this->placeGuestOrderAsync($request)->wait();
    }

    /**
     * @param PlaceGuestOrderRestRequest $request
     * @return PromiseInterface
     */
    public function placeGuestOrderAsync(PlaceGuestOrderRestRequest $request)
    {
        return $this->callOperationAsync('PlaceGuestOrder', $request);
    }

    /**
     * @param UpdateGuestLineItemQuantityRestRequest $request
     * @return UpdateGuestLineItemQuantityRestResponse
     */
    public function updateGuestLineItemQuantity(UpdateGuestLineItemQuantityRestRequest $request)
    {
        return $this->updateGuestLineItemQuantityAsync($request)->wait();
    }

    /**
     * @param UpdateGuestLineItemQuantityRestRequest $request
     * @return PromiseInterface
     */
    public function updateGuestLineItemQuantityAsync(UpdateGuestLineItemQuantityRestRequest $request)
    {
        return $this->callOperationAsync('UpdateGuestLineItemQuantity', $request);
    }

    /**
     * @param UpdateGuestLineItemShippingAddressRestRequest $request
     * @return UpdateGuestLineItemShippingAddressRestResponse
     */
    public function updateGuestLineItemShippingAddress(UpdateGuestLineItemShippingAddressRestRequest $request)
    {
        return $this->updateGuestLineItemShippingAddressAsync($request)->wait();
    }

    /**
     * @param UpdateGuestLineItemShippingAddressRestRequest $request
     * @return PromiseInterface
     */
    public function updateGuestLineItemShippingAddressAsync(UpdateGuestLineItemShippingAddressRestRequest $request)
    {
        return $this->callOperationAsync('UpdateGuestLineItemShippingAddress', $request);
    }

    /**
     * @param UpdateGuestPaymentInfoRestRequest $request
     * @return UpdateGuestPaymentInfoRestResponse
     */
    public function updateGuestPaymentInfo(UpdateGuestPaymentInfoRestRequest $request)
    {
        return $this->updateGuestPaymentInfoAsync($request)->wait();
    }

    /**
     * @param UpdateGuestPaymentInfoRestRequest $request
     * @return PromiseInterface
     */
    public function updateGuestPaymentInfoAsync(UpdateGuestPaymentInfoRestRequest $request)
    {
        return $this->callOperationAsync('UpdateGuestPaymentInfo', $request);
    }

    /**
     * @param UpdateGuestShippingOptionRestRequest $request
     * @return UpdateGuestShippingOptionRestResponse
     */
    public function updateGuestShippingOption(UpdateGuestShippingOptionRestRequest $request)
    {
        return $this->updateGuestShippingOptionAsync($request)->wait();
    }

    /**
     * @param UpdateGuestShippingOptionRestRequest $request
     * @return PromiseInterface
     */
    public function updateGuestShippingOptionAsync(UpdateGuestShippingOptionRestRequest $request)
    {
        return $this->callOperationAsync('UpdateGuestShippingOption', $request);
    }

    /**
     * @param GetGuestPurchaseOrderRestRequest $request
     * @return GetGuestPurchaseOrderRestResponse
     */
    public function getGuestPurchaseOrder(GetGuestPurchaseOrderRestRequest $request)
    {
        return $this->getGuestPurchaseOrderAsync($request)->wait();
    }

    /**
     * @param GetGuestPurchaseOrderRestRequest $request
     * @return PromiseInterface
     */
    public function getGuestPurchaseOrderAsync(GetGuestPurchaseOrderRestRequest $request)
    {
        return $this->callOperationAsync('GetGuestPurchaseOrder', $request);
    }

    /**
     * @param GetPurchaseOrderRestRequest $request
     * @return GetPurchaseOrderRestResponse
     */
    public function getPurchaseOrder(GetPurchaseOrderRestRequest $request)
    {
        return $this->getPurchaseOrderAsync($request)->wait();
    }

    /**
     * @param GetPurchaseOrderRestRequest $request
     * @return PromiseInterface
     */
    public function getPurchaseOrderAsync(GetPurchaseOrderRestRequest $request)
    {
        return $this->callOperationAsync('GetPurchaseOrder', $request);
    }
}
