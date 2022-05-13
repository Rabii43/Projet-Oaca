<?php

namespace Symfony\Config\LexikJwtAuthentication;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenExtractors'.\DIRECTORY_SEPARATOR.'AuthorizationHeaderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenExtractors'.\DIRECTORY_SEPARATOR.'CookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenExtractors'.\DIRECTORY_SEPARATOR.'QueryParameterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenExtractors'.\DIRECTORY_SEPARATOR.'SplitCookieConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class TokenExtractorsConfig 
{
    private $authorizationHeader;
    private $cookie;
    private $queryParameter;
    private $splitCookie;
    private $_usedProperties = [];
    
    public function authorizationHeader(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractors\AuthorizationHeaderConfig
    {
        if (null === $this->authorizationHeader) {
            $this->_usedProperties['authorizationHeader'] = true;
            $this->authorizationHeader = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\AuthorizationHeaderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "authorizationHeader()" has already been initialized. You cannot pass values the second time you call authorizationHeader().');
        }
    
        return $this->authorizationHeader;
    }
    
    public function cookie(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractors\CookieConfig
    {
        if (null === $this->cookie) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\CookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }
    
        return $this->cookie;
    }
    
    public function queryParameter(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractors\QueryParameterConfig
    {
        if (null === $this->queryParameter) {
            $this->_usedProperties['queryParameter'] = true;
            $this->queryParameter = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\QueryParameterConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "queryParameter()" has already been initialized. You cannot pass values the second time you call queryParameter().');
        }
    
        return $this->queryParameter;
    }
    
    public function splitCookie(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractors\SplitCookieConfig
    {
        if (null === $this->splitCookie) {
            $this->_usedProperties['splitCookie'] = true;
            $this->splitCookie = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\SplitCookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "splitCookie()" has already been initialized. You cannot pass values the second time you call splitCookie().');
        }
    
        return $this->splitCookie;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('authorization_header', $value)) {
            $this->_usedProperties['authorizationHeader'] = true;
            $this->authorizationHeader = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\AuthorizationHeaderConfig($value['authorization_header']);
            unset($value['authorization_header']);
        }
    
        if (array_key_exists('cookie', $value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\CookieConfig($value['cookie']);
            unset($value['cookie']);
        }
    
        if (array_key_exists('query_parameter', $value)) {
            $this->_usedProperties['queryParameter'] = true;
            $this->queryParameter = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\QueryParameterConfig($value['query_parameter']);
            unset($value['query_parameter']);
        }
    
        if (array_key_exists('split_cookie', $value)) {
            $this->_usedProperties['splitCookie'] = true;
            $this->splitCookie = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\SplitCookieConfig($value['split_cookie']);
            unset($value['split_cookie']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['authorizationHeader'])) {
            $output['authorization_header'] = $this->authorizationHeader->toArray();
        }
        if (isset($this->_usedProperties['cookie'])) {
            $output['cookie'] = $this->cookie->toArray();
        }
        if (isset($this->_usedProperties['queryParameter'])) {
            $output['query_parameter'] = $this->queryParameter->toArray();
        }
        if (isset($this->_usedProperties['splitCookie'])) {
            $output['split_cookie'] = $this->splitCookie->toArray();
        }
    
        return $output;
    }

}
