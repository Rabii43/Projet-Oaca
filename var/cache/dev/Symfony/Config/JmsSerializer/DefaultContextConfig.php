<?php

namespace Symfony\Config\JmsSerializer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DefaultContext'.\DIRECTORY_SEPARATOR.'SerializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DefaultContext'.\DIRECTORY_SEPARATOR.'DeserializationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultContextConfig 
{
    private $serialization;
    private $deserialization;
    private $_usedProperties = [];
    
    public function serialization(array $value = []): \Symfony\Config\JmsSerializer\DefaultContext\SerializationConfig
    {
        if (null === $this->serialization) {
            $this->_usedProperties['serialization'] = true;
            $this->serialization = new \Symfony\Config\JmsSerializer\DefaultContext\SerializationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "serialization()" has already been initialized. You cannot pass values the second time you call serialization().');
        }
    
        return $this->serialization;
    }
    
    public function deserialization(array $value = []): \Symfony\Config\JmsSerializer\DefaultContext\DeserializationConfig
    {
        if (null === $this->deserialization) {
            $this->_usedProperties['deserialization'] = true;
            $this->deserialization = new \Symfony\Config\JmsSerializer\DefaultContext\DeserializationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "deserialization()" has already been initialized. You cannot pass values the second time you call deserialization().');
        }
    
        return $this->deserialization;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('serialization', $value)) {
            $this->_usedProperties['serialization'] = true;
            $this->serialization = new \Symfony\Config\JmsSerializer\DefaultContext\SerializationConfig($value['serialization']);
            unset($value['serialization']);
        }
    
        if (array_key_exists('deserialization', $value)) {
            $this->_usedProperties['deserialization'] = true;
            $this->deserialization = new \Symfony\Config\JmsSerializer\DefaultContext\DeserializationConfig($value['deserialization']);
            unset($value['deserialization']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['serialization'])) {
            $output['serialization'] = $this->serialization->toArray();
        }
        if (isset($this->_usedProperties['deserialization'])) {
            $output['deserialization'] = $this->deserialization->toArray();
        }
    
        return $output;
    }

}
