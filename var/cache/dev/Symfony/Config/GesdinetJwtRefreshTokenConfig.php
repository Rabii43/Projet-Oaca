<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'GesdinetJwtRefreshToken'.\DIRECTORY_SEPARATOR.'CookieConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class GesdinetJwtRefreshTokenConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $ttl;
    private $ttlUpdate;
    private $firewall;
    private $userProvider;
    private $userIdentityField;
    private $managerType;
    private $refreshTokenClass;
    private $objectManager;
    private $userChecker;
    private $refreshTokenEntity;
    private $entityManager;
    private $singleUse;
    private $tokenParameterName;
    private $doctrineMappings;
    private $cookie;
    private $logoutFirewall;
    private $returnExpiration;
    private $returnExpirationParameterName;
    private $_usedProperties = [];
    
    /**
     * The default TTL for all authenticators.
     * @default 2592000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function ttl($value): self
    {
        $this->_usedProperties['ttl'] = true;
        $this->ttl = $value;
    
        return $this;
    }
    
    /**
     * The default update TTL flag for all authenticators.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function ttlUpdate($value): self
    {
        $this->_usedProperties['ttlUpdate'] = true;
        $this->ttlUpdate = $value;
    
        return $this;
    }
    
    /**
     * @default 'api'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "firewall" node is deprecated without replacement.
     * @return $this
     */
    public function firewall($value): self
    {
        $this->_usedProperties['firewall'] = true;
        $this->firewall = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The "user_provider" node is deprecated without replacement.
     * @return $this
     */
    public function userProvider($value): self
    {
        $this->_usedProperties['userProvider'] = true;
        $this->userProvider = $value;
    
        return $this;
    }
    
    /**
     * @default 'username'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "user_identity_field" node is deprecated without replacement.
     * @return $this
     */
    public function userIdentityField($value): self
    {
        $this->_usedProperties['userIdentityField'] = true;
        $this->userIdentityField = $value;
    
        return $this;
    }
    
    /**
     * Set the type of object manager to use (default: orm)
     * @default 'orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function managerType($value): self
    {
        $this->_usedProperties['managerType'] = true;
        $this->managerType = $value;
    
        return $this;
    }
    
    /**
     * Set the refresh token class to use (default: Gesdinet\JWTRefreshTokenBundle\Entity\RefreshToken)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function refreshTokenClass($value): self
    {
        $this->_usedProperties['refreshTokenClass'] = true;
        $this->refreshTokenClass = $value;
    
        return $this;
    }
    
    /**
     * Set the object manager to use (default: doctrine.orm.entity_manager)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function objectManager($value): self
    {
        $this->_usedProperties['objectManager'] = true;
        $this->objectManager = $value;
    
        return $this;
    }
    
    /**
     * @default 'security.user_checker'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "user_checker" node is deprecated without replacement.
     * @return $this
     */
    public function userChecker($value): self
    {
        $this->_usedProperties['userChecker'] = true;
        $this->userChecker = $value;
    
        return $this;
    }
    
    /**
     * Set the refresh token class to use (default: Gesdinet\JWTRefreshTokenBundle\Entity\RefreshToken)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The "refresh_token_entity" node is deprecated, use the "refresh_token_class" node instead.
     * @return $this
     */
    public function refreshTokenEntity($value): self
    {
        $this->_usedProperties['refreshTokenEntity'] = true;
        $this->refreshTokenEntity = $value;
    
        return $this;
    }
    
    /**
     * Set the entity manager to use
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The "entity_manager" node is deprecated, use the "object_manager" node instead.
     * @return $this
     */
    public function entityManager($value): self
    {
        $this->_usedProperties['entityManager'] = true;
        $this->entityManager = $value;
    
        return $this;
    }
    
    /**
     * When true, generate a new refresh token on consumption (deleting the old one)
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function singleUse($value): self
    {
        $this->_usedProperties['singleUse'] = true;
        $this->singleUse = $value;
    
        return $this;
    }
    
    /**
     * The default request parameter name containing the refresh token for all authenticators.
     * @default 'refresh_token'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tokenParameterName($value): self
    {
        $this->_usedProperties['tokenParameterName'] = true;
        $this->tokenParameterName = $value;
    
        return $this;
    }
    
    /**
     * When true, resolving of Doctrine mapping is done automatically to use either ORM or ODM object manager
     * @default true
     * @param ParamConfigurator|bool $value
     * @deprecated The "doctrine_mappings" node is deprecated without replacement.
     * @return $this
     */
    public function doctrineMappings($value): self
    {
        $this->_usedProperties['doctrineMappings'] = true;
        $this->doctrineMappings = $value;
    
        return $this;
    }
    
    public function cookie(array $value = []): \Symfony\Config\GesdinetJwtRefreshToken\CookieConfig
    {
        if (null === $this->cookie) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\GesdinetJwtRefreshToken\CookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }
    
        return $this->cookie;
    }
    
    /**
     * Name of the firewall that triggers the logout event to hook into (default: api)
     * @default 'api'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logoutFirewall($value): self
    {
        $this->_usedProperties['logoutFirewall'] = true;
        $this->logoutFirewall = $value;
    
        return $this;
    }
    
    /**
     * When true, the response will include the token expiration timestamp
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function returnExpiration($value): self
    {
        $this->_usedProperties['returnExpiration'] = true;
        $this->returnExpiration = $value;
    
        return $this;
    }
    
    /**
     * The default response parameter name containing the refresh token expiration timestamp
     * @default 'refresh_token_expiration'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function returnExpirationParameterName($value): self
    {
        $this->_usedProperties['returnExpirationParameterName'] = true;
        $this->returnExpirationParameterName = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'gesdinet_jwt_refresh_token';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('ttl', $value)) {
            $this->_usedProperties['ttl'] = true;
            $this->ttl = $value['ttl'];
            unset($value['ttl']);
        }
    
        if (array_key_exists('ttl_update', $value)) {
            $this->_usedProperties['ttlUpdate'] = true;
            $this->ttlUpdate = $value['ttl_update'];
            unset($value['ttl_update']);
        }
    
        if (array_key_exists('firewall', $value)) {
            $this->_usedProperties['firewall'] = true;
            $this->firewall = $value['firewall'];
            unset($value['firewall']);
        }
    
        if (array_key_exists('user_provider', $value)) {
            $this->_usedProperties['userProvider'] = true;
            $this->userProvider = $value['user_provider'];
            unset($value['user_provider']);
        }
    
        if (array_key_exists('user_identity_field', $value)) {
            $this->_usedProperties['userIdentityField'] = true;
            $this->userIdentityField = $value['user_identity_field'];
            unset($value['user_identity_field']);
        }
    
        if (array_key_exists('manager_type', $value)) {
            $this->_usedProperties['managerType'] = true;
            $this->managerType = $value['manager_type'];
            unset($value['manager_type']);
        }
    
        if (array_key_exists('refresh_token_class', $value)) {
            $this->_usedProperties['refreshTokenClass'] = true;
            $this->refreshTokenClass = $value['refresh_token_class'];
            unset($value['refresh_token_class']);
        }
    
        if (array_key_exists('object_manager', $value)) {
            $this->_usedProperties['objectManager'] = true;
            $this->objectManager = $value['object_manager'];
            unset($value['object_manager']);
        }
    
        if (array_key_exists('user_checker', $value)) {
            $this->_usedProperties['userChecker'] = true;
            $this->userChecker = $value['user_checker'];
            unset($value['user_checker']);
        }
    
        if (array_key_exists('refresh_token_entity', $value)) {
            $this->_usedProperties['refreshTokenEntity'] = true;
            $this->refreshTokenEntity = $value['refresh_token_entity'];
            unset($value['refresh_token_entity']);
        }
    
        if (array_key_exists('entity_manager', $value)) {
            $this->_usedProperties['entityManager'] = true;
            $this->entityManager = $value['entity_manager'];
            unset($value['entity_manager']);
        }
    
        if (array_key_exists('single_use', $value)) {
            $this->_usedProperties['singleUse'] = true;
            $this->singleUse = $value['single_use'];
            unset($value['single_use']);
        }
    
        if (array_key_exists('token_parameter_name', $value)) {
            $this->_usedProperties['tokenParameterName'] = true;
            $this->tokenParameterName = $value['token_parameter_name'];
            unset($value['token_parameter_name']);
        }
    
        if (array_key_exists('doctrine_mappings', $value)) {
            $this->_usedProperties['doctrineMappings'] = true;
            $this->doctrineMappings = $value['doctrine_mappings'];
            unset($value['doctrine_mappings']);
        }
    
        if (array_key_exists('cookie', $value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\GesdinetJwtRefreshToken\CookieConfig($value['cookie']);
            unset($value['cookie']);
        }
    
        if (array_key_exists('logout_firewall', $value)) {
            $this->_usedProperties['logoutFirewall'] = true;
            $this->logoutFirewall = $value['logout_firewall'];
            unset($value['logout_firewall']);
        }
    
        if (array_key_exists('return_expiration', $value)) {
            $this->_usedProperties['returnExpiration'] = true;
            $this->returnExpiration = $value['return_expiration'];
            unset($value['return_expiration']);
        }
    
        if (array_key_exists('return_expiration_parameter_name', $value)) {
            $this->_usedProperties['returnExpirationParameterName'] = true;
            $this->returnExpirationParameterName = $value['return_expiration_parameter_name'];
            unset($value['return_expiration_parameter_name']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['ttl'])) {
            $output['ttl'] = $this->ttl;
        }
        if (isset($this->_usedProperties['ttlUpdate'])) {
            $output['ttl_update'] = $this->ttlUpdate;
        }
        if (isset($this->_usedProperties['firewall'])) {
            $output['firewall'] = $this->firewall;
        }
        if (isset($this->_usedProperties['userProvider'])) {
            $output['user_provider'] = $this->userProvider;
        }
        if (isset($this->_usedProperties['userIdentityField'])) {
            $output['user_identity_field'] = $this->userIdentityField;
        }
        if (isset($this->_usedProperties['managerType'])) {
            $output['manager_type'] = $this->managerType;
        }
        if (isset($this->_usedProperties['refreshTokenClass'])) {
            $output['refresh_token_class'] = $this->refreshTokenClass;
        }
        if (isset($this->_usedProperties['objectManager'])) {
            $output['object_manager'] = $this->objectManager;
        }
        if (isset($this->_usedProperties['userChecker'])) {
            $output['user_checker'] = $this->userChecker;
        }
        if (isset($this->_usedProperties['refreshTokenEntity'])) {
            $output['refresh_token_entity'] = $this->refreshTokenEntity;
        }
        if (isset($this->_usedProperties['entityManager'])) {
            $output['entity_manager'] = $this->entityManager;
        }
        if (isset($this->_usedProperties['singleUse'])) {
            $output['single_use'] = $this->singleUse;
        }
        if (isset($this->_usedProperties['tokenParameterName'])) {
            $output['token_parameter_name'] = $this->tokenParameterName;
        }
        if (isset($this->_usedProperties['doctrineMappings'])) {
            $output['doctrine_mappings'] = $this->doctrineMappings;
        }
        if (isset($this->_usedProperties['cookie'])) {
            $output['cookie'] = $this->cookie->toArray();
        }
        if (isset($this->_usedProperties['logoutFirewall'])) {
            $output['logout_firewall'] = $this->logoutFirewall;
        }
        if (isset($this->_usedProperties['returnExpiration'])) {
            $output['return_expiration'] = $this->returnExpiration;
        }
        if (isset($this->_usedProperties['returnExpirationParameterName'])) {
            $output['return_expiration_parameter_name'] = $this->returnExpirationParameterName;
        }
    
        return $output;
    }

}
