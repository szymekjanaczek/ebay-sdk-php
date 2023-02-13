<?php
namespace DTS\eBaySDK;

use DTS\eBaySDK\Account\Services\AccountService;
use DTS\eBaySDK\Analytics\Services\AnalyticsService;
use DTS\eBaySDK\Browse\Services\BrowseService;
use DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService;
use DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService;
use DTS\eBaySDK\Feedback\Services\FeedbackService;
use DTS\eBaySDK\FileTransfer\Services\FileTransferService;
use DTS\eBaySDK\Finding\Services\FindingService;
use DTS\eBaySDK\Fulfillment\Services\FulfillmentService;
use DTS\eBaySDK\HalfFinding\Services\HalfFindingService;
use DTS\eBaySDK\Inventory\Services\InventoryService;
use DTS\eBaySDK\Marketing\Services\MarketingService;
use DTS\eBaySDK\Merchandising\Services\MerchandisingService;
use DTS\eBaySDK\Metadata\Services\MetadataService;
use DTS\eBaySDK\Order\Services\OrderService;
use DTS\eBaySDK\PostOrder\Services\PostOrderService;
use DTS\eBaySDK\Product\Services\ProductService;
use DTS\eBaySDK\ProductMetadata\Services\ProductMetadataService;
use DTS\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementService;
use DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService;
use DTS\eBaySDK\ReturnManagement\Services\ReturnManagementService;
use DTS\eBaySDK\Shopping\Services\ShoppingService;
use DTS\eBaySDK\Trading\Services\TradingService;
use DTS\eBaySDK\Services\BaseService;
use BadMethodCallException;
/**
 * Builds DTS\eBaySDK services based on passed configuration options.
 *
 * @method AccountService createAccount(array $args = [])
 * @method AnalyticsService createAnalytics(array $args = [])
 * @method BrowseService createBrowse(array $args = [])
 * @method BulkDataExchangeService createBulkDataExchange(array $args = [])
 * @method BusinessPoliciesManagementService createBusinessPoliciesManagement(array $args = [])
 * @method FeedbackService createFeedback(array $args = [])
 * @method FileTransferService createFileTransfer(array $args = [])
 * @method FindingService createFinding(array $args = [])
 * @method FulfillmentService createFulfillment(array $args = [])
 * @method HalfFindingService createHalfFinding(array $args = [])
 * @method InventoryService createInventory(array $args = [])
 * @method MarketingService createMarketing(array $args = [])
 * @method MerchandisingService createMerchandising(array $args = [])
 * @method MetadataService createMetadata(array $args = [])
 * @method OrderService createOrder(array $args = [])
 * @method PostOrderService createPostOrder(array $args = [])
 * @method ProductService createProduct(array $args = [])
 * @method ProductMetadataService createProductMetadata(array $args = [])
 * @method RelatedItemsManagementService createRelatedItemsManagement(array $args = [])
 * @method ResolutionCaseManagementService createResolutionCaseManagement(array $args = [])
 * @method ReturnManagementService createReturnManagement(array $args = [])
 * @method ShoppingService createShopping(array $args = [])
 * @method TradingService createTrading(array $args = [])
 */
class Sdk
{
    const VERSION = '18.0.0';

    /**
     * @var bool Controls if the SDK should enforce strict types
     * when values are assigned to property classes.
     */
    public static $STRICT_PROPERTY_TYPES = true;

    /**
     * @var array Configuration options for all services.
     */
    private array $config;

    /**
     * @param array $config Configuration option values for all services.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param string $name The method name.
     * @param array $args Arguments that will be passed to the method.
     *
     * @return BaseService
     * @throws BadMethodCallException
     */
    public function __call($name, array $args)
    {
        if (strpos($name, 'create') === 0) {
            return $this->createService(
                substr($name, 6),
                isset($args[0]) ? $args[0] : []
            );
        }

        throw new BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Create a service object by namespace. Service is configured using array of options.
     *
     * @param string $namespace Service namespace (e.g. Finding, Trading).
     * @param array  $config Configuration options for the service.
     *
     * @return BaseService
     **/
    public function createService($namespace, array $config = [])
    {
        $configuration = $this->config;

        if (isset($this->config[$namespace])) {
            $configuration = arrayMergeDeep($configuration, $this->config[$namespace]);
        }

        $configuration = arrayMergeDeep($configuration, $config);

        $service = "DTS\\eBaySDK\\{$namespace}\\Services\\{$namespace}Service";

        return new $service($configuration);
    }
}
