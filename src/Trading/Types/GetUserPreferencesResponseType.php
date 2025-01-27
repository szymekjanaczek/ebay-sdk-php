<?php

/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property BidderNoticePreferencesType $BidderNoticePreferences
 * @property CombinedPaymentPreferencesType $CombinedPaymentPreferences
 * @property SellerPaymentPreferencesType $SellerPaymentPreferences
 * @property SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
 * @property EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
 * @property boolean $EmailShipmentTrackingNumberPreference
 * @property boolean $RequiredShipPhoneNumberPreference
 * @property UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
 * @property SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences
 * @property PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
 * @property SellerProfilePreferencesType $SellerProfilePreferences
 * @property SellerReturnPreferencesType $SellerReturnPreferences
 * @property boolean $OfferGlobalShippingProgramPreference
 * @property DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
 * @property boolean $GlobalShippingProgramListingPreference
 * @property boolean $OverrideGSPServiceWithIntlServicePreference
 * @property boolean $PickupDropoffSellerPreference
 * @property boolean $OutOfStockControlPreference
 * @property EBayPLUSPreferenceType[] $eBayPLUSPreference
 */
class GetUserPreferencesResponseType extends AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static array $propertyTypes = [
        'BidderNoticePreferences'                     => [
            'type'        => 'DTS\eBaySDK\Trading\Types\BidderNoticePreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'BidderNoticePreferences'
        ],
        'CombinedPaymentPreferences'                  => [
            'type'        => 'DTS\eBaySDK\Trading\Types\CombinedPaymentPreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'CombinedPaymentPreferences'
        ],
        'SellerPaymentPreferences'                    => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellerPaymentPreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerPaymentPreferences'
        ],
        'SellerFavoriteItemPreferences'               => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerFavoriteItemPreferences'
        ],
        'EndOfAuctionEmailPreferences'                => [
            'type'        => 'DTS\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EndOfAuctionEmailPreferences'
        ],
        'EmailShipmentTrackingNumberPreference'       => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'EmailShipmentTrackingNumberPreference'
        ],
        'RequiredShipPhoneNumberPreference'           => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'RequiredShipPhoneNumberPreference'
        ],
        'UnpaidItemAssistancePreferences'             => [
            'type'        => 'DTS\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'UnpaidItemAssistancePreferences'
        ],
        'SellerExcludeShipToLocationPreferences'      => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerExcludeShipToLocationPreferences'
        ],
        'PurchaseReminderEmailPreferences'            => [
            'type'        => 'DTS\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PurchaseReminderEmailPreferences'
        ],
        'SellerProfilePreferences'                    => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellerProfilePreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerProfilePreferences'
        ],
        'SellerReturnPreferences'                     => [
            'type'        => 'DTS\eBaySDK\Trading\Types\SellerReturnPreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'SellerReturnPreferences'
        ],
        'OfferGlobalShippingProgramPreference'        => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'OfferGlobalShippingProgramPreference'
        ],
        'DispatchCutoffTimePreference'                => [
            'type'        => 'DTS\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'DispatchCutoffTimePreference'
        ],
        'GlobalShippingProgramListingPreference'      => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'GlobalShippingProgramListingPreference'
        ],
        'OverrideGSPServiceWithIntlServicePreference' => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'OverrideGSPServiceWithIntlServicePreference'
        ],
        'PickupDropoffSellerPreference'               => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'PickupDropoffSellerPreference'
        ],
        'OutOfStockControlPreference'                 => [
            'type'        => 'boolean',
            'repeatable'  => false,
            'attribute'   => false,
            'elementName' => 'OutOfStockControlPreference'
        ],
        'eBayPLUSPreference'                          => [
            'type'        => 'DTS\eBaySDK\Trading\Types\EBayPLUSPreferenceType',
            'repeatable'  => true,
            'attribute'   => false,
            'elementName' => 'eBayPLUSPreference'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
