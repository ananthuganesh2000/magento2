<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

/* These classes are skipped completely during comparison. */
return [
    '*' => [
        // phpcs:disable Generic.Files.LineLength.TooLong
        // list of the latest failures started
        Magento\Framework\ObjectManager\Resetter\WeakMapSorter::class => null, // caches sort values for classes
        Magento\Framework\Reflection\MethodsMap::class => null, // caches reflection
        Magento\Framework\Model\ResourceModel\Db\VersionControl\Metadata::class => null,  // DB table info per class
        Magento\Framework\Event\Config\Data::class => null, // TODO make sure this gets reloaded
        Magento\Framework\App\AreaList::class => null, // TODO make sure this gets reloaded
        Magento\Framework\Module\Dir\Reader::class => null, // config xml file iterators
        Magento\Framework\App\Language\Dictionary::class => null, // dictionary paths
        Magento\Framework\Config\Scope::class => null, // scope changes during test
        Magento\Framework\App\ResourceConnection\Config::class => null, // configuration for connections
        Magento\Framework\Module\ModuleList::class => null, // This one is needed to pass on Jenkins build
//        Magento\SalesRule\Model\DeltaPriceRound::class => null,
//        Magento\SalesRule\Helper\CartFixedDiscount::class => null,
//        Magento\SalesRule\Api\Data\RuleInterfaceFactory::class => null,
//        Magento\SalesRule\Api\Data\ConditionInterfaceFactory::class => null,
//        Magento\SalesRule\Api\Data\RuleLabelInterfaceFactory::class => null,
//        Magento\SalesRule\Model\Converter\ToDataModel::class => null,
//        Magento\SalesRule\Model\Converter\ToModel::class => null,
//        Magento\SalesRule\Api\Data\RuleSearchResultInterfaceFactory::class => null,
//        Magento\SalesRule\Model\RuleRepository::class => null,
//        Magento\SalesRule\Model\RuleFactory::class => null,
        Magento\SalesSequence\Model\MetaFactory::class => null,
        Magento\SalesSequence\Model\ProfileFactory::class => null,
        Magento\SalesSequence\Model\ResourceModel\Profile::class => null,
//        Magento\SalesSequence\Model\ResourceModel\Meta::class => null,
        Magento\SalesSequence\Model\SequenceFactory::class => null,
        Magento\SalesSequence\Model\Manager::class => null,
//        Magento\Quote\Model\ResourceModel\Collection\Interceptor::class => null,
//        Magento\Quote\Model\ResourceModel\Quote\Collection\Interceptor::class => null,
//        Magento\Quote\Api\Data\ProductOptionInterfaceFactory::class => null,
        Magento\Quote\Model\Quote\Item\Interceptor::class => null, // FIXME
        Magento\Quote\Model\Quote\Address\Interceptor::class => null, // FIXME
        Magento\Quote\Model\ResourceModel\Quote::class => null, // FIXME
//        Magento\Quote\Model\QuoteIdToMaskedQuoteId::class => null,
//        Magento\Quote\Model\Quote\Address\Total\Collector::class => null,
//        Magento\Quote\Model\Quote\TotalsCollectorList::class => null,
//        Magento\Quote\Model\Quote\TotalsCollector::class => null,
        Magento\Quote\Model\Quote::class => null, // FIXME
//        Magento\Quote\Model\Quote\ProductOptionFactory::class => null,
//        Magento\Quote\Api\Data\ProductOptionExtensionFactory::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\IndexTableRowSizeEstimator::class => null,
//        Magento\Catalog\Model\Indexer\Price\BatchSizeManagement::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\DefaultPrice::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\CompositeProductRelationsCalculator::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\CompositeProductRowSizeEstimator::class => null,
//        Magento\Catalog\Model\Indexer\Price\CompositeProductBatchSizeManagement::class => null,
//        Magento\Catalog\Model\Indexer\Product\Price\TableMaintainer::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\IndexTableStructureFactory::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Attribute\Backend\Tierprice::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\TierPrice::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\CompositeProductBatchSizeAdjuster::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Indexer\Price\BatchSizeCalculator::class => null,
//        Magento\Catalog\Model\ResourceModel\Product\Attribute\Collection::class => null,
//        Magento\Catalog\Model\Product\Attribute\Repository::class => null,
//        Magento\Catalog\Model\ResourceModel\Product::class => null,
//        Magento\Catalog\Model\ProductRepository::class => null,
//        Magento\Catalog\Model\Product\Type::class => null,
//        Magento\Catalog\Model\Product\Link::class => null,
//        Magento\Customer\Model\Indexer\AttributeProvider::class => null,
        Magento\Customer\Model\ResourceModel\Customer::class => null,
        Magento\Customer\Model\ResourceModel\Customer\Interceptor::class => null,
//        Magento\Customer\Model\ResourceModel\CustomerRepository::class => null,
//        Magento\Customer\Model\Session\Validators\CutoffValidator::class => null,
//        Magento\Customer\Model\Customer::class => null,
//        Magento\Customer\Model\Session\SessionCleaner::class => null,
//        Magento\Customer\Model\ResourceModel\AddressRepository::class => null,
//        Magento\Customer\Model\CustomerRegistry::class => null,
//        Magento\Customer\Model\ResourceModel\Address\Relation::class => null,
//        Magento\Customer\Model\ResourceModel\Address::class => null,
//        Magento\Customer\Model\AttributeMetadataConverter::class => null,
        Magento\Customer\Model\Metadata\CustomerMetadata::class => null, // TODO?
//        Magento\Customer\Model\Metadata\AttributeMetadataCache::class => null,
//        Magento\Customer\Model\Metadata\CustomerCachedMetadata::class => null,
//        Magento\Customer\Model\Config\Share::class => null,
//        Magento\Customer\Model\Session\Proxy::class => null,
//        Magento\Customer\Model\Delegation\Storage::class => null,
//        Magento\Customer\Model\ResourceModel\GroupRepository::class => null,
//        Magento\Customer\Helper\View::class => null,
//        Magento\Customer\Model\Authorization\CustomerSessionUserContext::class => null,
//        Magento\Customer\Model\Authentication::class => null,
//        Magento\Customer\Model\Session::class => null,
//        Magento\Customer\Model\AddressRegistry::class => null,
//        Magento\Customer\Model\AttributeMetadataDataProvider::class => null,
//        Magento\Customer\Model\AccountConfirmation::class => null,
//        Magento\Customer\Model\AccountManagement::class => null,
//        Magento\Customer\Model\Plugin\CustomerFlushFormKey::class => null,
        Magento\Customer\Observer\LogLastLoginAtObserver::class => null,
        Magento\Customer\Model\Visitor\Proxy::class => null,
        Magento\Customer\Api\CustomerRepositoryInterface\Proxy::class => null,
        Magento\Customer\Model\ResourceModel\Attribute::class => null,
        Magento\Customer\Model\Address\Config::class => null,
        Magento\Indexer\Model\Indexer::class => null,
        Magento\Indexer\Model\Indexer\DependencyDecorator::class => null,
        Magento\Indexer\Model\Indexer\DeferredCacheContext::class => null,
        Magento\Indexer\Model\Indexer\DeferredCacheCleaner::class => null,
        Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\ExtractDataFromCategoryTree::class => null,
        Magento\Eav\Model\ResourceModel\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\VersionControl\Metadata::class => null,
        Magento\Eav\Plugin\Model\ResourceModel\Entity\Attribute::class => null,
        Magento\Store\Model\GroupRepository::class => null,
        Magento\Bundle\Model\CartItemProcessor::class => null,
        Magento\ConfigurableProduct\Model\Quote\Item\CartItemProcessor::class => null,
        Magento\ConfigurableProduct\Model\ResourceModel\Product\Indexer\Price\OptionsSelectBuilder::class => null,
        Magento\ConfigurableProduct\Model\Product\Type\Configurable\Attribute::class => null,
        Magento\Payment\Gateway\Config\ConfigFactory::class => null,
        Magento\Payment\Gateway\Data\Quote\AddressAdapterFactory::class => null,
        Magento\Catalog\Model\ResourceModel\Category::class => null,
        Magento\CatalogGraphQl\Model\Resolver\Products\SearchCriteria\CollectionProcessor\FilterProcessor\CategoryFilter::class => null,
        Magento\Tax\Model\Quote\ToOrderConverter::class => null,
        Magento\Store\Model\WebsiteManagement::class => null,
        Magento\CatalogRule\Model\ResourceModel\Rule\Product\Price::class => null,
        Magento\CatalogRule\Model\Indexer\ProductPriceIndexModifier::class => null,
        Magento\InventoryConfigurableProduct\Pricing\Price\Indexer\BaseStockStatusSelectProcessor::class => null,
        Magento\InventoryConfigurableProduct\Pricing\Price\Indexer\OptionsIndexer::class => null,
        Magento\InventoryCatalog\Plugin\CatalogInventory\Model\Indexer\ModifySelectInProductPriceIndexFilter::class => null,
        Magento\Indexer\Model\Indexer\DeferCacheCleaning::class => null,
        Magento\LoginAsCustomerAssistance\Model\IsAssistanceEnabled::class => null,
        Magento\LoginAsCustomerAssistance\Model\SetAssistance::class => null,
        Magento\LoginAsCustomerAssistance\Plugin\CustomerPlugin::class => null,
        Magento\Config\Model\Config\Processor\EnvironmentPlaceholder::class => null,
        Magento\GraphQlNewRelic\Plugin\ReportError::class => null,
        Magento\CatalogInventory\Model\StockRegistryProvider::class => null,
        Magento\CatalogInventory\Model\StockRegistry::class => null,
        Magento\CatalogInventory\Model\Indexer\ProductPriceIndexFilter::class => null,
        Magento\Tax\Model\Calculation::class => null,
        Magento\Tax\Model\TaxCalculation::class => null,
        Magento\SalesRule\Model\RulesApplier::class => null,
        Magento\OfflineShipping\Model\SalesRule\Calculator::class => null,
        Magento\OfflineShipping\Model\Quote\Address\FreeShipping::class => null,
        Magento\SalesRule\Model\Validator::class => null,
        Magento\User\Helper\Data::class => null,
        Magento\Authorization\Model\RoleFactory::class => null,
        Magento\User\Model\UserValidationRules::class => null,
        Magento\User\Model\Backend\Config\ObserverConfig::class => null,
        Magento\User\Model\ResourceModel\User::class => null,
        Magento\User\Model\Notificator::class => null,
        Magento\TestModuleCatalogInventoryCache\Plugin\PreventCachingPreloadedStockDataInToStockRegistry::class => null,
        Magento\Catalog\Model\CustomOptions\CustomOptionProcessor::class => null,
        'orderMetadata' => null,
        Magento\Payment\Api\Data\PaymentAdditionalInfoInterfaceFactory::class => null,
        Magento\InventoryInStorePickup\Model\ExtractPickupLocationAddressData::class => null,
        Magento\InventoryInStorePickupQuote\Model\ExtractQuoteAddressShippingAddressData::class => null,
        Magento\InventoryInStorePickupQuote\Model\GetShippingAddressData::class => null,
        Magento\InventoryInStorePickupQuote\Model\IsPickupLocationShippingAddress::class => null,
        Magento\InventoryInStorePickupQuote\Model\ToQuoteAddress::class => null,
        Magento\InventoryInStorePickupQuote\Model\GetWebsiteCodeByStoreId::class => null,
        Magento\InventoryInStorePickupQuote\Plugin\Quote\ReplaceShippingAddressForShippingAddressManagement::class => null,
        Magento\NegotiableQuote\Model\Plugin\Quote\Model\ShippingAssignmentPersisterPlugin::class => null,
        Magento\PurchaseOrder\Plugin\Quote\Model\QuoteRepositoryPlugin::class => null,
        Magento\Catalog\Model\Config::class => null,
        Magento\Downloadable\Model\Url\DomainValidator::class => null,
        Magento\Staging\Model\VersionManager::class => null,
        Magento\Staging\Model\Url\BaseUrlModifier::class => null,
        Magento\Staging\Model\Event\Manager::class => null,
        Magento\CatalogStaging\Plugin\Catalog\Model\Indexer\AbstractFlatState::class => null,
        Magento\Directory\Helper\Data::class => null,
        Magento\Store\Model\Address\Renderer::class => null,
        Magento\QuoteGraphQl\Plugin\ProductAttributesExtender::class => null,
        Magento\Paypal\Plugin\TransparentSessionChecker::class => null,
        Magento\Backend\App\Area\FrontNameResolver::class => null,
        Magento\Backend\Helper\Data::class => null,
        Magento\GraphQl\Plugin\DisableSession::class => null,
        Magento\Tax\Model\TaxClass\Repository::class => null,
        Magento\JwtUserToken\Model\ResourceModel\FastStorageRevokedWrapper::class => null,
        Magento\Webapi\Model\Authorization\TokenUserContext::class => null,
        Magento\Authorization\Model\CompositeUserContext::class => null,
        Magento\Webapi\Model\WebapiRoleLocator::class => null,
        'CustomerAddressSnapshot' => null,
        'EavVersionControlSnapshot' => null,
        Magento\CustomerGraphQl\Model\Customer\ValidateCustomerData\ValidateEmail::class => null,
        Magento\CustomerGraphQl\Model\Customer\ValidateCustomerData::class => null,
        Magento\Catalog\Helper\Data::class => null,
        Magento\Eav\Model\AttributeDataFactory::class => null,
        Magento\Checkout\Model\Session::class => null,
        Magento\JwtUserToken\Model\ConfigurableJwtSettingsProvider::class => null,
        Magento\JwtUserToken\Model\Reader::class => null,
        Magento\Bundle\Pricing\Price\TaxPrice::class => null,
        Magento\Customer\Observer\AfterAddressSaveObserver::class => null,
        Magento\LoginAsCustomer\Model\GetLoggedAsCustomerAdminId::class => null,
        Magento\CustomerGraphQl\Plugin\ClearCustomerSessionAfterRequest::class => null,
        Laminas\Uri\Uri::class => null,
        Magento\TestFramework\Interception\PluginList::class => null,
        // memory leak, wrong sql, potential issues
        Magento\Theme\Model\View\Design::class => null,
        Magento\RemoteStorage\Model\Config::class => null,
        Magento\Store\Model\Config\Processor\Fallback::class => null,
        Magento\Framework\Lock\LockBackendFactory::class => null,
        'customRemoteFilesystem' => null,
        'systemConfigQueryLocker' => null,
        Magento\Config\App\Config\Source\RuntimeConfigSource::class => null,
        'scopesConfigInitialDataProvider' => null,
        Magento\Developer\Model\Logger\Handler\Debug::class => null,
        Magento\Developer\Model\Logger\Handler\Syslog::class => null,
        Magento\Store\App\Config\Source\RuntimeConfigSource::class => null,
        Magento\Store\App\Config\Type\Scopes::class => null,
        Magento\TestFramework\App\Config::class => null,
        Magento\TestFramework\Request::class => null,
        Magento\TestFramework\ErrorLog\Logger::class => null,
        Magento\TestFramework\Db\Adapter\Mysql\Interceptor::class => null,
        Magento\TestFramework\Mail\Template\TransportBuilderMock::class => null,
        Magento\TestFramework\Api\Config\Reader\FileResolver::class => null,
        'translationConfigSourceAggregated' => null,
        Magento\Theme\Model\View\Design\Proxy::class => null,
        Magento\Translation\Model\Source\InitialTranslationSource\Proxy::class => null,
        Magento\Translation\App\Config\Type\Translation::class => null,
        Magento\Backend\App\Request\PathInfoProcessor\Proxy::class => null,
        Magento\MediaStorage\Helper\File\Storage\Database::class => null,
        Magento\Store\Model\StoreManager::class => null,
        Magento\Store\Model\StoreManager\Interceptor::class => null,
        Magento\TestFramework\Response::class => null,
        Magento\Store\Model\WebsiteRepository::class => null,
        Magento\Store\Model\StoreRepository::class => null,
        Magento\Store\Model\System\Store::class => null,
        Magento\AwsS3\Driver\CredentialsCache::class => null,
        Magento\Eav\Model\Config::class => null,
        'AssetPreProcessorPool' => null,
        Magento\GraphQl\Model\Query\ContextFactory::class => null,
        'viewFileMinifiedFallbackResolver' => null,
        Magento\TestFramework\App\State::class => null,
        Magento\Framework\TestFramework\ApplicationStateComparator\SkipListAndFilterList::class => null, // Yes, our test uses mutable state itself :-)
        Magento\Framework\DB\Adapter\Pdo\Mysql\Interceptor::class => null,
        Magento\Framework\App\ObjectManager\ConfigLoader\Compiled::class => null,
        Magento\Framework\Interception\PluginList\PluginList::class => null,
        Magento\InventorySales\Model\IsProductSalableForRequestedQtyCondition\IsProductSalableForRequestedQtyConditionChain::class => null,
        Magento\InventorySales\Model\AreProductsSalableForRequestedQty::class => null,
        Magento\Config\App\Config\Type\System::class => null,
        Magento\CatalogRule\Observer\RulePricesStorage::class => null,
        Magento\CatalogRule\Observer\PrepareCatalogProductCollectionPricesObserver::class => null,
        Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\QuoteItemQtyList::class => null,
        Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\Initializer\Option::class => null,
        Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\Initializer\StockItem::class => null,
        Magento\CatalogRule\Observer\ProcessFrontFinalPriceObserver::class => null,
        Magento\SalesRule\Model\Coupon\CodeLimitManager::class => null,
        Magento\SalesRule\Observer\CouponCodeValidation::class => null,
        Magento\CatalogInventory\Helper\Stock::class => null,
        Magento\Downloadable\Model\Product\Type::class => null,
        Magento\Bundle\Model\Product\Type::class => null,
        Magento\CatalogInventory\Observer\AddInventoryDataObserver::class => null,
        Magento\Downloadable\Model\Quote\Item\CartItemProcessor::class => null,
        Magento\Staging\Model\Update\VersionHistory::class => null,
        Magento\Staging\Model\UpdateRepository::class => null,
        Magento\GraphQlCache\Model\Plugin\Auth\TokenIssuer::class => null,
        Magento\GraphQlCache\Model\Plugin\Auth\TokenExtractor::class => null,
        Magento\Quote\Model\Quote\Relation::class => null,
        Magento\Quote\Model\QueryResolver::class => null,
        'QuoteRelationsComposite' => null,
        Magento\StoreGraphQl\Plugin\LocalizeEmail::class => null,
        // phpcs:enable Generic.Files.LineLength.TooLong
        Magento\Framework\Lock\Proxy::class => null,
        Magento\TestFramework\ObjectManager\Config::class => null,
    ],
    '*-fromConstructed' => [
        // phpcs:disable Generic.Files.LineLength.TooLong
        Magento\Customer\Model\Cache\GroupExcludedWebsiteCache::class => null,
        Magento\Sales\Model\ResourceModel\Grid::class => null,
        Magento\Sales\Model\ResourceModel\GridPool::class => null,
        Magento\Sales\Api\Data\OrderExtension::class => null,
        Magento\Sales\Observer\GridSyncInsertObserver\Interceptor::class => null,
        Magento\Staging\Model\UpdateRepositoryCache::class => null,
        Magento\PageBuilder\Model\Filter\Template::class => null,
        Magento\PageBuilder\Plugin\Filter\TemplatePlugin::class => null,
        Magento\Customer\Api\Data\CustomerExtension::class => null,
        Magento\Framework\TestFramework\ApplicationStateComparator\ObjectManager::class => null,
        Magento\RemoteStorage\Filesystem::class => null,
        Magento\Framework\App\Cache\Frontend\Factory::class => null,
        Magento\Framework\ObjectManager\Definition\Runtime::class => null,
        Magento\Framework\Cache\LockGuardedCacheLoader::class => null,
        Magento\Framework\View\Asset\PreProcessor\Pool::class => null,
        Magento\Framework\App\Area::class => null,
        Magento\Store\Model\Store\Interceptor::class => null,
        Magento\Framework\TestFramework\ApplicationStateComparator\Comparator::class => null, // Yes, our test uses mutable state itself :-)
        Magento\Framework\GraphQl\Query\QueryParser::class => null, // reloads as a ReloadProcessor
        Magento\Framework\App\Http\Context\Interceptor::class => null,
        Magento\Framework\HTTP\LaminasClient::class => null,
        Magento\TestFramework\App\State\Interceptor::class => null,
        Magento\TestFramework\App\MutableScopeConfig::class => null,
        Magento\TestFramework\Store\StoreManager::class => null,
        Magento\TestFramework\Workaround\Override\Config\RelationsCollector::class => null,
        Magento\Framework\Session\SaveHandler::class => null,
        Magento\Customer\Model\Group\Interceptor::class => null,
        Magento\Store\Model\Group\Interceptor::class => null,
        Magento\Directory\Model\Currency\Interceptor::class => null,
        Magento\Catalog\Model\Category\AttributeRepository::class => null, // Note: has reloadState
        Magento\Catalog\Model\ResourceModel\Category\Interceptor::class => null,
        Magento\Catalog\Model\Attribute\Backend\DefaultBackend\Interceptor::class => null,
        Magento\GraphQlCache\Model\Resolver\IdentityPool::class => null,
        Magento\Inventory\Model\Stock::class => null,
        Magento\InventorySales\Model\SalesChannel::class => null,
        Magento\InventoryApi\Api\Data\StockExtension::class => null,
        Magento\Elasticsearch\Model\Adapter\FieldMapper\FieldMapperResolver::class => null,
        Magento\Catalog\Model\ResourceModel\Eav\Attribute\Interceptor::class => null,
        Magento\Catalog\Model\Category\Attribute\Backend\Image\Interceptor::class => null,
        Magento\Catalog\Model\Attribute\Backend\Startdate\Interceptor::class => null,
        Magento\Eav\Model\Entity\Attribute\Backend\Datetime\Interceptor::class => null,
        Magento\Catalog\Model\Category\Attribute\Backend\Sortby\Interceptor::class => null,
        Magento\Catalog\Model\Category\Attribute\Backend\LayoutUpdate\Interceptor::class => null,
        Magento\Catalog\Model\Attribute\Backend\Customlayoutupdate\Interceptor::class => null,
        Magento\Eav\Model\Entity\Attribute\Backend\Time\Created\Interceptor::class => null,
        Magento\Eav\Model\Entity\AttributeBackendTime\Updated\Interceptor::class => null,
        Magento\Eav\Model\Entity\Attribute\Backend\Increment\Interceptor::class => null,
        Magento\Eav\Model\Entity\Interceptor::class => null,
        Magento\Framework\View\Asset\RepositoryMap::class => null,
        Magento\Framework\Url\RouteParamsResolver\Interceptor::class => null,
        Magento\Theme\Model\Theme::class => null,
        Magento\Catalog\Model\ResourceModel\Category\Collection\Interceptor::class => null,
        Magento\Catalog\Model\Category\Interceptor::class => null,
        Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree\Wrapper\NodeWrapper::class => null,
        Magento\Framework\Api\AttributeValue::class => null,
        Magento\Catalog\Model\ResourceModel\Product\Collection\ProductLimitation::class => null,
        Magento\Catalog\Model\ResourceModel\Product\Interceptor::class => null,
        Magento\Catalog\Model\ResourceModel\Product\Collection\Interceptor::class => null,
        Magento\Framework\Api\Search\SearchCriteria::class => null,
        Magento\Framework\Api\SortOrder::class => null,
        Magento\Framework\Api\Search\SearchResult::class => null,
        Magento\Eav\Model\Entity\Attribute\Backend\Time\Updated\Interceptor::class => null,
        Magento\CatalogInventory\Model\Stock\Item\Interceptor::class => null,
        Magento\Framework\View\Asset\File::class => null,
        Magento\Customer\Model\Attribute\Interceptor::class => null,
        Magento\Framework\GraphQl\Schema\SchemaGenerator::class => null,
        Magento\Framework\App\PageCache\Version::class => null,
        Magento\Framework\App\PageCache\Identifier::class => null,
        Magento\Framework\App\PageCache\Kernel::class => null,
        Magento\Translation\Model\Source\InitialTranslationSource::class => null,
        Magento\Framework\GraphQl\Schema\Type\Output\OutputMapper::class => null,
        Magento\Framework\GraphQl\Schema\Type\Input\InputMapper::class => null,
        Magento\Framework\Filesystem\DriverPool::class => null,
        Magento\Framework\Filesystem\Directory\WriteFactory::class => null,
        Magento\Catalog\Model\Product\Media\Config::class => null,
        Magento\Catalog\Model\Product\Type\Interceptor::class =>
            null, // Note: We may need to check to see if this needs to be reset when config changes
        Magento\ConfigurableProduct\Model\Product\Type\Configurable\Interceptor::class => null,
        Magento\Catalog\Model\Product\Type\Simple\Interceptor::class => null,
        Magento\TestFramework\Event\Magento::class => null,
        Magento\Store\Model\Website\Interceptor::class => null, // reset by poison pill
        Magento\Eav\Model\Entity\Type::class => null, // attribute types should be destroyed by poison pill
        Magento\Eav\Model\Entity\Attribute\Backend\DefaultBackend\Interceptor::class =>
            null, // attribute types should be destroyed by poison pill
        Magento\TestFramework\Mail\Template\TransportBuilderMock\Interceptor::class => null, // only for testing
        Magento\Framework\ForeignKey\ObjectRelationProcessor\EnvironmentConfig::class =>
            null, // OK; shouldn't change outside of deployment
        Magento\Customer\Model\ResourceModel\Attribute\Collection\Interceptor::class =>
            null, // Note: We don't _resetState these attributes on purpose.  Gets reset by Magento\ApplicationServer\Eav\Model\Config\ClearWithoutCleaningCache
        Magento\Customer\Model\ResourceModel\Address\Attribute\Collection\Interceptor::class =>
            null, // Note: We don't _resetState these attributes on purpose.  Gets reset by Magento\ApplicationServer\Eav\Model\Config\ClearWithoutCleaningCache
        Magento\Config\Model\Config\Structure\Data::class => null, // should be cleaned after poison pill
        Magento\Customer\Model\ResourceModel\Address\Interceptor::class =>
            null, // customer_address_entity table info
        Magento\SalesRule\Model\ResourceModel\Rule::class => null,
        Magento\SalesRule\Model\Plugin\QuoteConfigProductAttributes::class => null,
        //Create Empty Cart
        Magento\Quote\Model\ResourceModel\Quote\QuoteIdMask::class => null,
        Magento\Quote\Model\Cart\CustomerCartResolver::class => null,
        Magento\QuoteGraphQl\Model\Cart\CreateEmptyCartForGuest::class => null,
        Magento\Quote\Model\MaskedQuoteIdToQuoteId::class => null,
        Magento\Quote\Model\Quote\Address\Total\Shipping::class => null, // FIXME
        Magento\SalesRule\Model\Quote\Discount::class => null,
        Magento\Weee\Model\Total\Quote\Weee::class => null,
        Magento\Quote\Model\Quote\Interceptor::class => null, // FIXME
        Magento\Quote\Model\ResourceModel\Quote\Address::class => null,
        Magento\Quote\Model\Quote\Address::class => null, // FIXME
        Magento\Quote\Model\ShippingMethodManagement::class => null,
        Magento\Quote\Model\ResourceModel\Quote\Item\Collection\Interceptor::class => null,
        Magento\Quote\Model\Quote\Address\Total::class => null, // FIXME
        Laminas\Validator\ValidatorChain::class => null,
        Magento\CustomerCustomAttributes\Model\ResourceModel\Sales\Quote\Address::class => null,
        Magento\ResourceConnections\App\DeploymentConfig::class => null,
        Magento\Staging\Model\StagingList::class => null,
        Magento\Staging\Model\ResourceModel\Update::class => null,
        Magento\AdobeCommerceEventsClient\Event\EventList::class => null,
        Magento\AdobeCommerceEventsClient\Event\Filter\EventFieldsFilter::class => null,
        Magento\AdobeCommerceEventsClient\Event\EventStorageWriter::class => null,
        Magento\TestModuleAdobeCommerceEvents\Plugin\Framework\ManagerInterfacePlugin::class => null,
        Magento\Catalog\Model\Product\Interceptor::class => null,
        Magento\Catalog\Model\Product\Attribute\Backend\Price\Interceptor::class => null,
        Magento\Catalog\Model\Product\Attribute\Backend\Tierprice\Interceptor::class => null,
        Magento\Catalog\Model\Product\Attribute\Backend\Boolean\Interceptor::class => null,
        Magento\Catalog\Model\Product\Attribute\Backend\LayoutUpdate\Interceptor::class => null,
        Magento\Catalog\Model\Product\Attribute\Backend\Stock\Interceptor::class => null,
        Magento\Catalog\Model\Product\Attribute\Backend\Weight\Interceptor::class => null,
        Magento\Catalog\Model\ResourceModel\Product\CategoryLink::class => null,
        Magento\Catalog\Model\Category\Link\ReadHandler::class => null,
        Laminas\Validator\Uri::class => null,
        Magento\Quote\Model\ResourceModel\Quote\Item::class => null,
        Magento\Quote\Model\Quote\Item::class => null,
        Magento\Quote\Model\ResourceModel\Quote\Item\Option::class => null,
        Magento\Quote\Model\Quote\Item\Option::class => null,
        Magento\User\Model\User\Interceptor::class => null,
        Magento\Quote\Model\ShippingAssignment::class => null,
        Magento\Quote\Model\Shipping::class => null,
        Magento\NegotiableQuote\Model\NegotiableQuote\Interceptor::class => null,
        Magento\Quote\Api\Data\CartExtension::class => null, // FIXME
        Magento\Catalog\Api\Data\ProductExtension::class => null,
        Magento\Quote\Api\Data\AddressExtension::class => null,
        Magento\CatalogRule\Observer\ProcessFrontFinalPriceObserver\Interceptor::class => null,
        Magento\Catalog\Model\Product\Type\Virtual\Interceptor::class => null,
        Magento\Catalog\Model\Product\Link\Interceptor::class => null,
        Magento\Bundle\Model\Product\Type\Interceptor::class => null,
        Magento\Bundle\Model\Product\LinksList::class => null,
        Magento\Bundle\Model\Product\OptionList::class => null,
        Magento\Bundle\Model\Option\SaveAction::class => null,
        Magento\Bundle\Model\OptionRepository::class => null,
        Magento\CatalogInventory\Model\AddStockStatusToCollection::class => null,
        Magento\Bundle\Model\ResourceModel\Option\Collection\Interceptor::class => null,
        Magento\Bundle\Model\Link::class => null,
        Magento\Bundle\Model\Option::class => null,
        Magento\Bundle\Model\BundleOption::class => null,
        Magento\Quote\Api\Data\ProductOptionExtension::class => null,
        Magento\Quote\Model\Quote\ProductOption::class => null,
        Magento\Catalog\Model\CategoryLink::class => null,
        Magento\ConfigurableProduct\Model\Product\Type\Configurable\OptionValue::class => null,
        Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\Collection\Interceptor::class => null,
        Magento\ConfigurableProduct\Model\Quote\Item\ConfigurableItemOptionValue::class => null,
        Magento\Downloadable\Model\Product\Type\Interceptor::class => null,
        Magento\Downloadable\Model\LinkRepository::class => null,
        Magento\Downloadable\Model\SampleRepository::class => null,
        Magento\Downloadable\Model\Link::class => null,
        Magento\Downloadable\Model\ResourceModel\Sample\Collection\Interceptor::class => null,
        Magento\Downloadable\Model\Sample::class => null,
        Magento\Downloadable\Model\DownloadableOption::class => null,
        Magento\Payment\Model\MethodList::class => null,
        Magento\Quote\Model\PaymentMethodManagement::class => null,
        Magento\Quote\Model\ResourceModel\Quote\Address\Rate::class => null,
        Magento\Framework\ObjectManager\TMap::class => null,
        Magento\Payment\Gateway\Config\ValueHandlerPool::class => null,
        Magento\Payment\Model\Method\Adapter::class => null,
        Magento\Tax\Model\Quote\GrandTotalDetailsPlugin::class => null,
        Magento\Quote\Model\BillingAddressManagement::class => null,
        Magento\QuoteGraphQl\Model\Cart\AssignBillingAddressToCart::class => null,
        Magento\NegotiableQuote\Plugin\Quote\Api\JoinNegotiableQuoteTotalsPlugin::class => null,
        Magento\Captcha\Helper\Data::class => null,
        Magento\Checkout\Model\CaptchaRateLimiter::class => null,
        Magento\Captcha\Model\DefaultModel::class => null,
        Magento\Quote\Model\ResourceModel\Quote\Payment::class => null,
        Magento\Company\Plugin\Framework\Model\ActionValidator\RemoveActionPlugin::class => null,
        Magento\Sales\Model\Order\ItemRepository\Interceptor::class => null,
        Magento\Sales\Model\ResourceModel\Order\Interceptor::class => null,
        Magento\Sales\Model\Order\Address\Validator::class => null,
        Magento\Quote\Model\SubmitQuoteValidator::class => null,
        Magento\Catalog\Model\Indexer\Product\Price\DimensionModeConfiguration::class => null,
        Magento\Catalog\Model\Indexer\Product\Price\PriceTableResolver::class => null,
        Magento\Sales\Model\Order\Config::class => null,
        Magento\Sales\Model\Order\Interceptor::class => null,
        Magento\Sales\Model\ResourceModel\Order\Address::class => null,
        Magento\Sales\Model\Order\Address::class => null,
        Magento\Sales\Model\Order\CreditmemoFactory::class => null,
        Magento\Sales\Model\Order\Payment\Interceptor::class => null,
        Magento\Sales\Model\ResourceModel\Order\Item::class => null,
        Magento\Sales\Model\Order\Item\Interceptor::class => null,
        Magento\OfflinePayments\Model\Checkmo::class => null,
        Magento\Sales\Model\ResourceModel\Order\Status\Collection\Interceptor::class => null,
        Magento\Paypal\Model\Pro::class => null,
        Magento\Paypal\Model\Api\Nvp::class => null,
        Magento\Sales\Model\ResourceModel\Order\Invoice\Collection\Interceptor::class => null,
        Magento\CatalogSearch\Model\ResourceModel\EngineProvider::class => null,
        Magento\Catalog\Model\Indexer\Product\Price\DimensionCollectionFactory::class => null,
        Magento\Indexer\Model\Mview\View\State\Interceptor::class => null,
        Magento\Framework\Mview\View::class => null,
        Magento\Framework\Amqp\ConfigPool::class => null,
        Magento\Framework\Amqp\ExchangeFactory::class => null,
        Magento\Framework\MessageQueue\MessageEncoder::class => null,
        Magento\Framework\MessageQueue\MessageValidator::class => null,
        Magento\Framework\MessageQueue\Bulk\Publisher::class => null,
        Magento\Framework\MessageQueue\Bulk\Rpc\Publisher::class => null,
        Magento\InventorySales\Plugin\InventoryReservationsApi\PreventAppendReservationOnNotManageItemsInStockPlugin::class => null,
        Magento\Framework\MessageQueue\ExchangeRepository::class => null,
        Magento\Framework\MessageQueue\Publisher::class => null,
        Magento\Framework\MessageQueue\Rpc\Publisher::class => null,
        Magento\Framework\MessageQueue\PublisherPool::class => null,
        Magento\InventoryIndexer\Plugin\InventorySales\EnqueueAfterPlaceReservationsForSalesEvent::class => null,
        Magento\Framework\Amqp\Config::class => null,
        Magento\Framework\Amqp\Exchange::class => null,
        PhpAmqpLib\Connection\AMQPStreamConnection::class => null,
        Magento\CatalogInventory\Model\Indexer\Stock\CacheCleaner::class => null,
        Magento\InventoryCatalogSearch\Plugin\CatalogSearch\Model\Indexer\ChildProductFilterByInventoryStockPlugin::class => null,
        Magento\InventoryElasticsearch\Plugin\CatalogSearch\Model\Indexer\Fulltext\Action\DataProvider\StockedProductFilterByInventoryStock::class => null,
        Magento\Widget\Model\ResourceModel\Layout\Update::class => null,
        Magento\Widget\Model\ResourceModel\Layout\Plugin::class => null,
        Magento\Sales\Model\Order\Address\Interceptor::class => null,
        Magento\OfflinePayments\Model\Checkmo\Interceptor::class => null,
        Magento\NegotiableQuote\Model\Restriction\Admin::class => null,
        Magento\AsynchronousOperations\Model\BulkManagement::class => null,
        Magento\SalesRule\Model\Service\CouponUsagePublisher::class => null,
        Magento\Paypal\Model\Api\Nvp\Interceptor::class => null,
        Magento\PurchaseOrder\Model\PurchaseOrder\LogManagement::class => null,
        Magento\Customer\Model\Metadata\AddressMetadata::class => null,
        Magento\Customer\Model\Metadata\AddressCachedMetadata::class => null,
        Magento\Framework\DB\Select\RendererProxy::class => null,
        Magento\Framework\DB\SelectFactory::class => null,
        Magento\Quote\Api\Data\CartItemExtension::class => null,
        Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\Initializer\Option\Interceptor::class => null,
        Magento\OfflineShipping\Model\Carrier\Flatrate::class => null,
        Magento\Quote\Model\Quote\Payment::class => null,
        Magento\Sales\Model\Order\Address\Renderer::class => null,
        Magento\Sales\Model\Order\Status::class => null,
        Magento\CatalogInventory\Model\Indexer\Stock\Action\Rows::class => null,
        Magento\CatalogInventory\Model\ResourceModel\Indexer\Stock\DefaultStock::class => null,
        Magento\ConfigurableProduct\Model\ResourceModel\Indexer\Stock\Configurable::class => null,
        Magento\Bundle\Model\ResourceModel\Indexer\Stock::class => null,
        Magento\GroupedProduct\Model\ResourceModel\Indexer\Stock\Grouped::class => null,
        Magento\Elasticsearch\Model\Adapter\BatchDataMapper\DataMapperResolver::class => null,
        Magento\Elasticsearch\Model\Adapter\Elasticsearch::class => null,
        Magento\Tax\Model\TaxClass\Source\Product::class => null,
        Magento\Framework\View\TemplateEnginePool::class => null,
        Magento\Framework\View\Element\Template\File\Resolver::class => null,
        Magento\Framework\View\Element\Template\File\Validator::class => null,
        Magento\Framework\View\Element\Template\Context::class => null,
        'validator' => null,
        'inlineTranslation' => null,
        Magento\Customer\Block\Address\Renderer\DefaultRenderer::class => null,
        Magento\Framework\View\Layout\ReaderPool::class => null,
        Magento\Framework\View\Layout\Reader\Block::class => null,
        Magento\Framework\View\Layout\Reader\UiComponent::class => null,
        Magento\PageCache\Observer\ProcessLayoutRenderElement::class => null,
        Magento\Staging\Model\Update::class => null,
        Magento\Staging\Model\Update\Flag::class => null,
        Magento\Catalog\Model\Category\Attribute\Source\Sortby::class => null,
        Magento\Config\App\Config\Source\EnvironmentConfigSource::class => null,
        Magento\Framework\MessageQueue\Topology\Config\ExchangeConfigItem\Binding::class => null,
        Magento\Framework\MessageQueue\Topology\Config\ExchangeConfigItem\Binding\Iterator::class => null,
        Magento\Framework\MessageQueue\Topology\Config\ExchangeConfigItem::class => null,
        Magento\Framework\MessageQueue\Topology\Config\QueueConfigItem::class => null,
        Magento\Framework\MessageQueue\Topology\Config\QueueConfigItem\DataMapper::class => null,
        // phpcs:enable Generic.Files.LineLength.TooLong
    ],
    '' => [
    ],
];
