<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioCors'.\DIRECTORY_SEPARATOR.'DefaultsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioCors'.\DIRECTORY_SEPARATOR.'PathsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class NelmioCorsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaults;
    private $paths;
    private $_usedProperties = [];
    
    public function defaults(array $value = []): \Symfony\Config\NelmioCors\DefaultsConfig
    {
        if (null === $this->defaults) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = new \Symfony\Config\NelmioCors\DefaultsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaults()" has already been initialized. You cannot pass values the second time you call defaults().');
        }
    
        return $this->defaults;
    }
    
    public function paths(string $path, array $value = []): \Symfony\Config\NelmioCors\PathsConfig
    {
        if (!isset($this->paths[$path])) {
            $this->_usedProperties['paths'] = true;
    
            return $this->paths[$path] = new \Symfony\Config\NelmioCors\PathsConfig($value);
        }
        if ([] === $value) {
            return $this->paths[$path];
        }
    
        throw new InvalidConfigurationException('The node created by "paths()" has already been initialized. You cannot pass values the second time you call paths().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'nelmio_cors';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('defaults', $value)) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = new \Symfony\Config\NelmioCors\DefaultsConfig($value['defaults']);
            unset($value['defaults']);
        }
    
        if (array_key_exists('paths', $value)) {
            $this->_usedProperties['paths'] = true;
            $this->paths = array_map(function ($v) { return new \Symfony\Config\NelmioCors\PathsConfig($v); }, $value['paths']);
            unset($value['paths']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaults'])) {
            $output['defaults'] = $this->defaults->toArray();
        }
        if (isset($this->_usedProperties['paths'])) {
            $output['paths'] = array_map(function ($v) { return $v->toArray(); }, $this->paths);
        }
    
        return $output;
    }

}
