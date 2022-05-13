<?php

namespace Symfony\Config\JmsSerializer\Visitors;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class JsonDeserializationConfig 
{
    private $options;
    private $_usedProperties = [];
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options($value): self
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }
    
        return $output;
    }

}
