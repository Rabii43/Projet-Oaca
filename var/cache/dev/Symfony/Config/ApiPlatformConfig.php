<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'ValidatorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'EagerLoadingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'CollectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'MappingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'DoctrineConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'DoctrineMongodbOdmConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'OauthConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'GraphqlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'SwaggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'HttpCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'MercureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'MessengerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'ElasticsearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'OpenapiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'FormatsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'PatchFormatsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'ErrorFormatsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'DefaultsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ApiPlatformConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $title;
    private $description;
    private $version;
    private $showWebby;
    private $defaultOperationPathResolver;
    private $nameConverter;
    private $assetPackage;
    private $pathSegmentNameGenerator;
    private $allowPlainIdentifiers;
    private $validator;
    private $eagerLoading;
    private $enableFosUser;
    private $enableNelmioApiDoc;
    private $enableSwagger;
    private $enableSwaggerUi;
    private $enableReDoc;
    private $enableEntrypoint;
    private $enableDocs;
    private $enableProfiler;
    private $collection;
    private $mapping;
    private $resourceClassDirectories;
    private $doctrine;
    private $doctrineMongodbOdm;
    private $oauth;
    private $graphql;
    private $swagger;
    private $httpCache;
    private $mercure;
    private $messenger;
    private $elasticsearch;
    private $openapi;
    private $exceptionToStatus;
    private $formats;
    private $patchFormats;
    private $errorFormats;
    private $defaults;
    private $_usedProperties = [];
    
    /**
     * The title of the API.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): self
    {
        $this->_usedProperties['title'] = true;
        $this->title = $value;
    
        return $this;
    }
    
    /**
     * The description of the API.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): self
    {
        $this->_usedProperties['description'] = true;
        $this->description = $value;
    
        return $this;
    }
    
    /**
     * The version of the API.
     * @default '0.0.0'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): self
    {
        $this->_usedProperties['version'] = true;
        $this->version = $value;
    
        return $this;
    }
    
    /**
     * If true, show Webby on the documentation page
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showWebby($value): self
    {
        $this->_usedProperties['showWebby'] = true;
        $this->showWebby = $value;
    
        return $this;
    }
    
    /**
     * Specify the default operation path resolver to use for generating resources operations path.
     * @default 'api_platform.operation_path_resolver.underscore'
     * @param ParamConfigurator|mixed $value
     * @deprecated The use of the `default_operation_path_resolver` has been deprecated in 2.1 and will be removed in 3.0. Use `path_segment_name_generator` instead.
     * @return $this
     */
    public function defaultOperationPathResolver($value): self
    {
        $this->_usedProperties['defaultOperationPathResolver'] = true;
        $this->defaultOperationPathResolver = $value;
    
        return $this;
    }
    
    /**
     * Specify a name converter to use.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function nameConverter($value): self
    {
        $this->_usedProperties['nameConverter'] = true;
        $this->nameConverter = $value;
    
        return $this;
    }
    
    /**
     * Specify an asset package name to use.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function assetPackage($value): self
    {
        $this->_usedProperties['assetPackage'] = true;
        $this->assetPackage = $value;
    
        return $this;
    }
    
    /**
     * Specify a path name generator to use.
     * @default 'api_platform.path_segment_name_generator.underscore'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pathSegmentNameGenerator($value): self
    {
        $this->_usedProperties['pathSegmentNameGenerator'] = true;
        $this->pathSegmentNameGenerator = $value;
    
        return $this;
    }
    
    /**
     * Allow plain identifiers, for example "id" instead of "@id" when denormalizing a relation.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowPlainIdentifiers($value): self
    {
        $this->_usedProperties['allowPlainIdentifiers'] = true;
        $this->allowPlainIdentifiers = $value;
    
        return $this;
    }
    
    public function validator(array $value = []): \Symfony\Config\ApiPlatform\ValidatorConfig
    {
        if (null === $this->validator) {
            $this->_usedProperties['validator'] = true;
            $this->validator = new \Symfony\Config\ApiPlatform\ValidatorConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "validator()" has already been initialized. You cannot pass values the second time you call validator().');
        }
    
        return $this->validator;
    }
    
    public function eagerLoading(array $value = []): \Symfony\Config\ApiPlatform\EagerLoadingConfig
    {
        if (null === $this->eagerLoading) {
            $this->_usedProperties['eagerLoading'] = true;
            $this->eagerLoading = new \Symfony\Config\ApiPlatform\EagerLoadingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "eagerLoading()" has already been initialized. You cannot pass values the second time you call eagerLoading().');
        }
    
        return $this->eagerLoading;
    }
    
    /**
     * Enable the FOSUserBundle integration.
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated FOSUserBundle is not actively maintained anymore. Enabling the FOSUserBundle integration has been deprecated in 2.5 and will be removed in 3.0.
     * @return $this
     */
    public function enableFosUser($value): self
    {
        $this->_usedProperties['enableFosUser'] = true;
        $this->enableFosUser = $value;
    
        return $this;
    }
    
    /**
     * Enable the NelmioApiDocBundle integration.
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated Enabling the NelmioApiDocBundle integration has been deprecated in 2.2 and will be removed in 3.0. NelmioApiDocBundle 3 has native support for API Platform.
     * @return $this
     */
    public function enableNelmioApiDoc($value): self
    {
        $this->_usedProperties['enableNelmioApiDoc'] = true;
        $this->enableNelmioApiDoc = $value;
    
        return $this;
    }
    
    /**
     * Enable the Swagger documentation and export.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableSwagger($value): self
    {
        $this->_usedProperties['enableSwagger'] = true;
        $this->enableSwagger = $value;
    
        return $this;
    }
    
    /**
     * Enable Swagger UI
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableSwaggerUi($value): self
    {
        $this->_usedProperties['enableSwaggerUi'] = true;
        $this->enableSwaggerUi = $value;
    
        return $this;
    }
    
    /**
     * Enable ReDoc
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableReDoc($value): self
    {
        $this->_usedProperties['enableReDoc'] = true;
        $this->enableReDoc = $value;
    
        return $this;
    }
    
    /**
     * Enable the entrypoint
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableEntrypoint($value): self
    {
        $this->_usedProperties['enableEntrypoint'] = true;
        $this->enableEntrypoint = $value;
    
        return $this;
    }
    
    /**
     * Enable the docs
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableDocs($value): self
    {
        $this->_usedProperties['enableDocs'] = true;
        $this->enableDocs = $value;
    
        return $this;
    }
    
    /**
     * Enable the data collector and the WebProfilerBundle integration.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableProfiler($value): self
    {
        $this->_usedProperties['enableProfiler'] = true;
        $this->enableProfiler = $value;
    
        return $this;
    }
    
    public function collection(array $value = []): \Symfony\Config\ApiPlatform\CollectionConfig
    {
        if (null === $this->collection) {
            $this->_usedProperties['collection'] = true;
            $this->collection = new \Symfony\Config\ApiPlatform\CollectionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "collection()" has already been initialized. You cannot pass values the second time you call collection().');
        }
    
        return $this->collection;
    }
    
    public function mapping(array $value = []): \Symfony\Config\ApiPlatform\MappingConfig
    {
        if (null === $this->mapping) {
            $this->_usedProperties['mapping'] = true;
            $this->mapping = new \Symfony\Config\ApiPlatform\MappingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mapping()" has already been initialized. You cannot pass values the second time you call mapping().');
        }
    
        return $this->mapping;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function resourceClassDirectories($value): self
    {
        $this->_usedProperties['resourceClassDirectories'] = true;
        $this->resourceClassDirectories = $value;
    
        return $this;
    }
    
    public function doctrine(array $value = []): \Symfony\Config\ApiPlatform\DoctrineConfig
    {
        if (null === $this->doctrine) {
            $this->_usedProperties['doctrine'] = true;
            $this->doctrine = new \Symfony\Config\ApiPlatform\DoctrineConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrine()" has already been initialized. You cannot pass values the second time you call doctrine().');
        }
    
        return $this->doctrine;
    }
    
    public function doctrineMongodbOdm(array $value = []): \Symfony\Config\ApiPlatform\DoctrineMongodbOdmConfig
    {
        if (null === $this->doctrineMongodbOdm) {
            $this->_usedProperties['doctrineMongodbOdm'] = true;
            $this->doctrineMongodbOdm = new \Symfony\Config\ApiPlatform\DoctrineMongodbOdmConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrineMongodbOdm()" has already been initialized. You cannot pass values the second time you call doctrineMongodbOdm().');
        }
    
        return $this->doctrineMongodbOdm;
    }
    
    public function oauth(array $value = []): \Symfony\Config\ApiPlatform\OauthConfig
    {
        if (null === $this->oauth) {
            $this->_usedProperties['oauth'] = true;
            $this->oauth = new \Symfony\Config\ApiPlatform\OauthConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "oauth()" has already been initialized. You cannot pass values the second time you call oauth().');
        }
    
        return $this->oauth;
    }
    
    public function graphql(array $value = []): \Symfony\Config\ApiPlatform\GraphqlConfig
    {
        if (null === $this->graphql) {
            $this->_usedProperties['graphql'] = true;
            $this->graphql = new \Symfony\Config\ApiPlatform\GraphqlConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "graphql()" has already been initialized. You cannot pass values the second time you call graphql().');
        }
    
        return $this->graphql;
    }
    
    public function swagger(array $value = []): \Symfony\Config\ApiPlatform\SwaggerConfig
    {
        if (null === $this->swagger) {
            $this->_usedProperties['swagger'] = true;
            $this->swagger = new \Symfony\Config\ApiPlatform\SwaggerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "swagger()" has already been initialized. You cannot pass values the second time you call swagger().');
        }
    
        return $this->swagger;
    }
    
    public function httpCache(array $value = []): \Symfony\Config\ApiPlatform\HttpCacheConfig
    {
        if (null === $this->httpCache) {
            $this->_usedProperties['httpCache'] = true;
            $this->httpCache = new \Symfony\Config\ApiPlatform\HttpCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "httpCache()" has already been initialized. You cannot pass values the second time you call httpCache().');
        }
    
        return $this->httpCache;
    }
    
    public function mercure(array $value = []): \Symfony\Config\ApiPlatform\MercureConfig
    {
        if (null === $this->mercure) {
            $this->_usedProperties['mercure'] = true;
            $this->mercure = new \Symfony\Config\ApiPlatform\MercureConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mercure()" has already been initialized. You cannot pass values the second time you call mercure().');
        }
    
        return $this->mercure;
    }
    
    public function messenger(array $value = []): \Symfony\Config\ApiPlatform\MessengerConfig
    {
        if (null === $this->messenger) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = new \Symfony\Config\ApiPlatform\MessengerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "messenger()" has already been initialized. You cannot pass values the second time you call messenger().');
        }
    
        return $this->messenger;
    }
    
    public function elasticsearch(array $value = []): \Symfony\Config\ApiPlatform\ElasticsearchConfig
    {
        if (null === $this->elasticsearch) {
            $this->_usedProperties['elasticsearch'] = true;
            $this->elasticsearch = new \Symfony\Config\ApiPlatform\ElasticsearchConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "elasticsearch()" has already been initialized. You cannot pass values the second time you call elasticsearch().');
        }
    
        return $this->elasticsearch;
    }
    
    public function openapi(array $value = []): \Symfony\Config\ApiPlatform\OpenapiConfig
    {
        if (null === $this->openapi) {
            $this->_usedProperties['openapi'] = true;
            $this->openapi = new \Symfony\Config\ApiPlatform\OpenapiConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "openapi()" has already been initialized. You cannot pass values the second time you call openapi().');
        }
    
        return $this->openapi;
    }
    
    /**
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function exceptionToStatus(string $exception_class, $value): self
    {
        $this->_usedProperties['exceptionToStatus'] = true;
        $this->exceptionToStatus[$exception_class] = $value;
    
        return $this;
    }
    
    public function formats(string $format, array $value = []): \Symfony\Config\ApiPlatform\FormatsConfig
    {
        if (!isset($this->formats[$format])) {
            $this->_usedProperties['formats'] = true;
    
            return $this->formats[$format] = new \Symfony\Config\ApiPlatform\FormatsConfig($value);
        }
        if ([] === $value) {
            return $this->formats[$format];
        }
    
        throw new InvalidConfigurationException('The node created by "formats()" has already been initialized. You cannot pass values the second time you call formats().');
    }
    
    public function patchFormats(string $format, array $value = []): \Symfony\Config\ApiPlatform\PatchFormatsConfig
    {
        if (!isset($this->patchFormats[$format])) {
            $this->_usedProperties['patchFormats'] = true;
    
            return $this->patchFormats[$format] = new \Symfony\Config\ApiPlatform\PatchFormatsConfig($value);
        }
        if ([] === $value) {
            return $this->patchFormats[$format];
        }
    
        throw new InvalidConfigurationException('The node created by "patchFormats()" has already been initialized. You cannot pass values the second time you call patchFormats().');
    }
    
    public function errorFormats(string $format, array $value = []): \Symfony\Config\ApiPlatform\ErrorFormatsConfig
    {
        if (!isset($this->errorFormats[$format])) {
            $this->_usedProperties['errorFormats'] = true;
    
            return $this->errorFormats[$format] = new \Symfony\Config\ApiPlatform\ErrorFormatsConfig($value);
        }
        if ([] === $value) {
            return $this->errorFormats[$format];
        }
    
        throw new InvalidConfigurationException('The node created by "errorFormats()" has already been initialized. You cannot pass values the second time you call errorFormats().');
    }
    
    public function defaults(array $value = []): \Symfony\Config\ApiPlatform\DefaultsConfig
    {
        if (null === $this->defaults) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = new \Symfony\Config\ApiPlatform\DefaultsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaults()" has already been initialized. You cannot pass values the second time you call defaults().');
        }
    
        return $this->defaults;
    }
    
    public function getExtensionAlias(): string
    {
        return 'api_platform';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('title', $value)) {
            $this->_usedProperties['title'] = true;
            $this->title = $value['title'];
            unset($value['title']);
        }
    
        if (array_key_exists('description', $value)) {
            $this->_usedProperties['description'] = true;
            $this->description = $value['description'];
            unset($value['description']);
        }
    
        if (array_key_exists('version', $value)) {
            $this->_usedProperties['version'] = true;
            $this->version = $value['version'];
            unset($value['version']);
        }
    
        if (array_key_exists('show_webby', $value)) {
            $this->_usedProperties['showWebby'] = true;
            $this->showWebby = $value['show_webby'];
            unset($value['show_webby']);
        }
    
        if (array_key_exists('default_operation_path_resolver', $value)) {
            $this->_usedProperties['defaultOperationPathResolver'] = true;
            $this->defaultOperationPathResolver = $value['default_operation_path_resolver'];
            unset($value['default_operation_path_resolver']);
        }
    
        if (array_key_exists('name_converter', $value)) {
            $this->_usedProperties['nameConverter'] = true;
            $this->nameConverter = $value['name_converter'];
            unset($value['name_converter']);
        }
    
        if (array_key_exists('asset_package', $value)) {
            $this->_usedProperties['assetPackage'] = true;
            $this->assetPackage = $value['asset_package'];
            unset($value['asset_package']);
        }
    
        if (array_key_exists('path_segment_name_generator', $value)) {
            $this->_usedProperties['pathSegmentNameGenerator'] = true;
            $this->pathSegmentNameGenerator = $value['path_segment_name_generator'];
            unset($value['path_segment_name_generator']);
        }
    
        if (array_key_exists('allow_plain_identifiers', $value)) {
            $this->_usedProperties['allowPlainIdentifiers'] = true;
            $this->allowPlainIdentifiers = $value['allow_plain_identifiers'];
            unset($value['allow_plain_identifiers']);
        }
    
        if (array_key_exists('validator', $value)) {
            $this->_usedProperties['validator'] = true;
            $this->validator = new \Symfony\Config\ApiPlatform\ValidatorConfig($value['validator']);
            unset($value['validator']);
        }
    
        if (array_key_exists('eager_loading', $value)) {
            $this->_usedProperties['eagerLoading'] = true;
            $this->eagerLoading = new \Symfony\Config\ApiPlatform\EagerLoadingConfig($value['eager_loading']);
            unset($value['eager_loading']);
        }
    
        if (array_key_exists('enable_fos_user', $value)) {
            $this->_usedProperties['enableFosUser'] = true;
            $this->enableFosUser = $value['enable_fos_user'];
            unset($value['enable_fos_user']);
        }
    
        if (array_key_exists('enable_nelmio_api_doc', $value)) {
            $this->_usedProperties['enableNelmioApiDoc'] = true;
            $this->enableNelmioApiDoc = $value['enable_nelmio_api_doc'];
            unset($value['enable_nelmio_api_doc']);
        }
    
        if (array_key_exists('enable_swagger', $value)) {
            $this->_usedProperties['enableSwagger'] = true;
            $this->enableSwagger = $value['enable_swagger'];
            unset($value['enable_swagger']);
        }
    
        if (array_key_exists('enable_swagger_ui', $value)) {
            $this->_usedProperties['enableSwaggerUi'] = true;
            $this->enableSwaggerUi = $value['enable_swagger_ui'];
            unset($value['enable_swagger_ui']);
        }
    
        if (array_key_exists('enable_re_doc', $value)) {
            $this->_usedProperties['enableReDoc'] = true;
            $this->enableReDoc = $value['enable_re_doc'];
            unset($value['enable_re_doc']);
        }
    
        if (array_key_exists('enable_entrypoint', $value)) {
            $this->_usedProperties['enableEntrypoint'] = true;
            $this->enableEntrypoint = $value['enable_entrypoint'];
            unset($value['enable_entrypoint']);
        }
    
        if (array_key_exists('enable_docs', $value)) {
            $this->_usedProperties['enableDocs'] = true;
            $this->enableDocs = $value['enable_docs'];
            unset($value['enable_docs']);
        }
    
        if (array_key_exists('enable_profiler', $value)) {
            $this->_usedProperties['enableProfiler'] = true;
            $this->enableProfiler = $value['enable_profiler'];
            unset($value['enable_profiler']);
        }
    
        if (array_key_exists('collection', $value)) {
            $this->_usedProperties['collection'] = true;
            $this->collection = new \Symfony\Config\ApiPlatform\CollectionConfig($value['collection']);
            unset($value['collection']);
        }
    
        if (array_key_exists('mapping', $value)) {
            $this->_usedProperties['mapping'] = true;
            $this->mapping = new \Symfony\Config\ApiPlatform\MappingConfig($value['mapping']);
            unset($value['mapping']);
        }
    
        if (array_key_exists('resource_class_directories', $value)) {
            $this->_usedProperties['resourceClassDirectories'] = true;
            $this->resourceClassDirectories = $value['resource_class_directories'];
            unset($value['resource_class_directories']);
        }
    
        if (array_key_exists('doctrine', $value)) {
            $this->_usedProperties['doctrine'] = true;
            $this->doctrine = new \Symfony\Config\ApiPlatform\DoctrineConfig($value['doctrine']);
            unset($value['doctrine']);
        }
    
        if (array_key_exists('doctrine_mongodb_odm', $value)) {
            $this->_usedProperties['doctrineMongodbOdm'] = true;
            $this->doctrineMongodbOdm = new \Symfony\Config\ApiPlatform\DoctrineMongodbOdmConfig($value['doctrine_mongodb_odm']);
            unset($value['doctrine_mongodb_odm']);
        }
    
        if (array_key_exists('oauth', $value)) {
            $this->_usedProperties['oauth'] = true;
            $this->oauth = new \Symfony\Config\ApiPlatform\OauthConfig($value['oauth']);
            unset($value['oauth']);
        }
    
        if (array_key_exists('graphql', $value)) {
            $this->_usedProperties['graphql'] = true;
            $this->graphql = new \Symfony\Config\ApiPlatform\GraphqlConfig($value['graphql']);
            unset($value['graphql']);
        }
    
        if (array_key_exists('swagger', $value)) {
            $this->_usedProperties['swagger'] = true;
            $this->swagger = new \Symfony\Config\ApiPlatform\SwaggerConfig($value['swagger']);
            unset($value['swagger']);
        }
    
        if (array_key_exists('http_cache', $value)) {
            $this->_usedProperties['httpCache'] = true;
            $this->httpCache = new \Symfony\Config\ApiPlatform\HttpCacheConfig($value['http_cache']);
            unset($value['http_cache']);
        }
    
        if (array_key_exists('mercure', $value)) {
            $this->_usedProperties['mercure'] = true;
            $this->mercure = new \Symfony\Config\ApiPlatform\MercureConfig($value['mercure']);
            unset($value['mercure']);
        }
    
        if (array_key_exists('messenger', $value)) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = new \Symfony\Config\ApiPlatform\MessengerConfig($value['messenger']);
            unset($value['messenger']);
        }
    
        if (array_key_exists('elasticsearch', $value)) {
            $this->_usedProperties['elasticsearch'] = true;
            $this->elasticsearch = new \Symfony\Config\ApiPlatform\ElasticsearchConfig($value['elasticsearch']);
            unset($value['elasticsearch']);
        }
    
        if (array_key_exists('openapi', $value)) {
            $this->_usedProperties['openapi'] = true;
            $this->openapi = new \Symfony\Config\ApiPlatform\OpenapiConfig($value['openapi']);
            unset($value['openapi']);
        }
    
        if (array_key_exists('exception_to_status', $value)) {
            $this->_usedProperties['exceptionToStatus'] = true;
            $this->exceptionToStatus = $value['exception_to_status'];
            unset($value['exception_to_status']);
        }
    
        if (array_key_exists('formats', $value)) {
            $this->_usedProperties['formats'] = true;
            $this->formats = array_map(function ($v) { return new \Symfony\Config\ApiPlatform\FormatsConfig($v); }, $value['formats']);
            unset($value['formats']);
        }
    
        if (array_key_exists('patch_formats', $value)) {
            $this->_usedProperties['patchFormats'] = true;
            $this->patchFormats = array_map(function ($v) { return new \Symfony\Config\ApiPlatform\PatchFormatsConfig($v); }, $value['patch_formats']);
            unset($value['patch_formats']);
        }
    
        if (array_key_exists('error_formats', $value)) {
            $this->_usedProperties['errorFormats'] = true;
            $this->errorFormats = array_map(function ($v) { return new \Symfony\Config\ApiPlatform\ErrorFormatsConfig($v); }, $value['error_formats']);
            unset($value['error_formats']);
        }
    
        if (array_key_exists('defaults', $value)) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = new \Symfony\Config\ApiPlatform\DefaultsConfig($value['defaults']);
            unset($value['defaults']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['version'])) {
            $output['version'] = $this->version;
        }
        if (isset($this->_usedProperties['showWebby'])) {
            $output['show_webby'] = $this->showWebby;
        }
        if (isset($this->_usedProperties['defaultOperationPathResolver'])) {
            $output['default_operation_path_resolver'] = $this->defaultOperationPathResolver;
        }
        if (isset($this->_usedProperties['nameConverter'])) {
            $output['name_converter'] = $this->nameConverter;
        }
        if (isset($this->_usedProperties['assetPackage'])) {
            $output['asset_package'] = $this->assetPackage;
        }
        if (isset($this->_usedProperties['pathSegmentNameGenerator'])) {
            $output['path_segment_name_generator'] = $this->pathSegmentNameGenerator;
        }
        if (isset($this->_usedProperties['allowPlainIdentifiers'])) {
            $output['allow_plain_identifiers'] = $this->allowPlainIdentifiers;
        }
        if (isset($this->_usedProperties['validator'])) {
            $output['validator'] = $this->validator->toArray();
        }
        if (isset($this->_usedProperties['eagerLoading'])) {
            $output['eager_loading'] = $this->eagerLoading->toArray();
        }
        if (isset($this->_usedProperties['enableFosUser'])) {
            $output['enable_fos_user'] = $this->enableFosUser;
        }
        if (isset($this->_usedProperties['enableNelmioApiDoc'])) {
            $output['enable_nelmio_api_doc'] = $this->enableNelmioApiDoc;
        }
        if (isset($this->_usedProperties['enableSwagger'])) {
            $output['enable_swagger'] = $this->enableSwagger;
        }
        if (isset($this->_usedProperties['enableSwaggerUi'])) {
            $output['enable_swagger_ui'] = $this->enableSwaggerUi;
        }
        if (isset($this->_usedProperties['enableReDoc'])) {
            $output['enable_re_doc'] = $this->enableReDoc;
        }
        if (isset($this->_usedProperties['enableEntrypoint'])) {
            $output['enable_entrypoint'] = $this->enableEntrypoint;
        }
        if (isset($this->_usedProperties['enableDocs'])) {
            $output['enable_docs'] = $this->enableDocs;
        }
        if (isset($this->_usedProperties['enableProfiler'])) {
            $output['enable_profiler'] = $this->enableProfiler;
        }
        if (isset($this->_usedProperties['collection'])) {
            $output['collection'] = $this->collection->toArray();
        }
        if (isset($this->_usedProperties['mapping'])) {
            $output['mapping'] = $this->mapping->toArray();
        }
        if (isset($this->_usedProperties['resourceClassDirectories'])) {
            $output['resource_class_directories'] = $this->resourceClassDirectories;
        }
        if (isset($this->_usedProperties['doctrine'])) {
            $output['doctrine'] = $this->doctrine->toArray();
        }
        if (isset($this->_usedProperties['doctrineMongodbOdm'])) {
            $output['doctrine_mongodb_odm'] = $this->doctrineMongodbOdm->toArray();
        }
        if (isset($this->_usedProperties['oauth'])) {
            $output['oauth'] = $this->oauth->toArray();
        }
        if (isset($this->_usedProperties['graphql'])) {
            $output['graphql'] = $this->graphql->toArray();
        }
        if (isset($this->_usedProperties['swagger'])) {
            $output['swagger'] = $this->swagger->toArray();
        }
        if (isset($this->_usedProperties['httpCache'])) {
            $output['http_cache'] = $this->httpCache->toArray();
        }
        if (isset($this->_usedProperties['mercure'])) {
            $output['mercure'] = $this->mercure->toArray();
        }
        if (isset($this->_usedProperties['messenger'])) {
            $output['messenger'] = $this->messenger->toArray();
        }
        if (isset($this->_usedProperties['elasticsearch'])) {
            $output['elasticsearch'] = $this->elasticsearch->toArray();
        }
        if (isset($this->_usedProperties['openapi'])) {
            $output['openapi'] = $this->openapi->toArray();
        }
        if (isset($this->_usedProperties['exceptionToStatus'])) {
            $output['exception_to_status'] = $this->exceptionToStatus;
        }
        if (isset($this->_usedProperties['formats'])) {
            $output['formats'] = array_map(function ($v) { return $v->toArray(); }, $this->formats);
        }
        if (isset($this->_usedProperties['patchFormats'])) {
            $output['patch_formats'] = array_map(function ($v) { return $v->toArray(); }, $this->patchFormats);
        }
        if (isset($this->_usedProperties['errorFormats'])) {
            $output['error_formats'] = array_map(function ($v) { return $v->toArray(); }, $this->errorFormats);
        }
        if (isset($this->_usedProperties['defaults'])) {
            $output['defaults'] = $this->defaults->toArray();
        }
    
        return $output;
    }

}
