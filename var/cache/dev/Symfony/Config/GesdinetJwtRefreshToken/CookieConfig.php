<?php

namespace Symfony\Config\GesdinetJwtRefreshToken;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class CookieConfig 
{
    private $enabled;
    private $sameSite;
    private $path;
    private $domain;
    private $httpOnly;
    private $secure;
    private $removeTokenFromBody;
    private $_usedProperties = [];
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'lax'
     * @param ParamConfigurator|'none'|'lax'|'strict' $value
     * @return $this
     */
    public function sameSite($value): self
    {
        $this->_usedProperties['sameSite'] = true;
        $this->sameSite = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function domain($value): self
    {
        $this->_usedProperties['domain'] = true;
        $this->domain = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function httpOnly($value): self
    {
        $this->_usedProperties['httpOnly'] = true;
        $this->httpOnly = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secure($value): self
    {
        $this->_usedProperties['secure'] = true;
        $this->secure = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function removeTokenFromBody($value): self
    {
        $this->_usedProperties['removeTokenFromBody'] = true;
        $this->removeTokenFromBody = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (array_key_exists('same_site', $value)) {
            $this->_usedProperties['sameSite'] = true;
            $this->sameSite = $value['same_site'];
            unset($value['same_site']);
        }
    
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (array_key_exists('domain', $value)) {
            $this->_usedProperties['domain'] = true;
            $this->domain = $value['domain'];
            unset($value['domain']);
        }
    
        if (array_key_exists('http_only', $value)) {
            $this->_usedProperties['httpOnly'] = true;
            $this->httpOnly = $value['http_only'];
            unset($value['http_only']);
        }
    
        if (array_key_exists('secure', $value)) {
            $this->_usedProperties['secure'] = true;
            $this->secure = $value['secure'];
            unset($value['secure']);
        }
    
        if (array_key_exists('remove_token_from_body', $value)) {
            $this->_usedProperties['removeTokenFromBody'] = true;
            $this->removeTokenFromBody = $value['remove_token_from_body'];
            unset($value['remove_token_from_body']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['sameSite'])) {
            $output['same_site'] = $this->sameSite;
        }
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['domain'])) {
            $output['domain'] = $this->domain;
        }
        if (isset($this->_usedProperties['httpOnly'])) {
            $output['http_only'] = $this->httpOnly;
        }
        if (isset($this->_usedProperties['secure'])) {
            $output['secure'] = $this->secure;
        }
        if (isset($this->_usedProperties['removeTokenFromBody'])) {
            $output['remove_token_from_body'] = $this->removeTokenFromBody;
        }
    
        return $output;
    }

}
