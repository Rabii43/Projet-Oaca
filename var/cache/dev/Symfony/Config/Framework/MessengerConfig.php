<?php

namespace Symfony\Config\Framework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'RoutingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'SerializerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'TransportConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'BusConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class MessengerConfig 
{
    private $enabled;
    private $routing;
    private $serializer;
    private $transports;
    private $failureTransport;
    private $resetOnMessage;
    private $defaultBus;
    private $buses;
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
    
    public function routing(string $message_class, array $value = []): \Symfony\Config\Framework\Messenger\RoutingConfig
    {
        if (!isset($this->routing[$message_class])) {
            $this->_usedProperties['routing'] = true;
    
            return $this->routing[$message_class] = new \Symfony\Config\Framework\Messenger\RoutingConfig($value);
        }
        if ([] === $value) {
            return $this->routing[$message_class];
        }
    
        throw new InvalidConfigurationException('The node created by "routing()" has already been initialized. You cannot pass values the second time you call routing().');
    }
    
    public function serializer(array $value = []): \Symfony\Config\Framework\Messenger\SerializerConfig
    {
        if (null === $this->serializer) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = new \Symfony\Config\Framework\Messenger\SerializerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "serializer()" has already been initialized. You cannot pass values the second time you call serializer().');
        }
    
        return $this->serializer;
    }
    
    public function transport(string $name, array $value = []): \Symfony\Config\Framework\Messenger\TransportConfig
    {
        if (!isset($this->transports[$name])) {
            $this->_usedProperties['transports'] = true;
    
            return $this->transports[$name] = new \Symfony\Config\Framework\Messenger\TransportConfig($value);
        }
        if ([] === $value) {
            return $this->transports[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "transport()" has already been initialized. You cannot pass values the second time you call transport().');
    }
    
    /**
     * Transport name to send failed messages to (after all retries have failed).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failureTransport($value): self
    {
        $this->_usedProperties['failureTransport'] = true;
        $this->failureTransport = $value;
    
        return $this;
    }
    
    /**
     * Reset container services after each message.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function resetOnMessage($value): self
    {
        $this->_usedProperties['resetOnMessage'] = true;
        $this->resetOnMessage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultBus($value): self
    {
        $this->_usedProperties['defaultBus'] = true;
        $this->defaultBus = $value;
    
        return $this;
    }
    
    public function bus(string $name, array $value = []): \Symfony\Config\Framework\Messenger\BusConfig
    {
        if (!isset($this->buses[$name])) {
            $this->_usedProperties['buses'] = true;
    
            return $this->buses[$name] = new \Symfony\Config\Framework\Messenger\BusConfig($value);
        }
        if ([] === $value) {
            return $this->buses[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "bus()" has already been initialized. You cannot pass values the second time you call bus().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (array_key_exists('routing', $value)) {
            $this->_usedProperties['routing'] = true;
            $this->routing = array_map(function ($v) { return new \Symfony\Config\Framework\Messenger\RoutingConfig($v); }, $value['routing']);
            unset($value['routing']);
        }
    
        if (array_key_exists('serializer', $value)) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = new \Symfony\Config\Framework\Messenger\SerializerConfig($value['serializer']);
            unset($value['serializer']);
        }
    
        if (array_key_exists('transports', $value)) {
            $this->_usedProperties['transports'] = true;
            $this->transports = array_map(function ($v) { return new \Symfony\Config\Framework\Messenger\TransportConfig($v); }, $value['transports']);
            unset($value['transports']);
        }
    
        if (array_key_exists('failure_transport', $value)) {
            $this->_usedProperties['failureTransport'] = true;
            $this->failureTransport = $value['failure_transport'];
            unset($value['failure_transport']);
        }
    
        if (array_key_exists('reset_on_message', $value)) {
            $this->_usedProperties['resetOnMessage'] = true;
            $this->resetOnMessage = $value['reset_on_message'];
            unset($value['reset_on_message']);
        }
    
        if (array_key_exists('default_bus', $value)) {
            $this->_usedProperties['defaultBus'] = true;
            $this->defaultBus = $value['default_bus'];
            unset($value['default_bus']);
        }
    
        if (array_key_exists('buses', $value)) {
            $this->_usedProperties['buses'] = true;
            $this->buses = array_map(function ($v) { return new \Symfony\Config\Framework\Messenger\BusConfig($v); }, $value['buses']);
            unset($value['buses']);
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
        if (isset($this->_usedProperties['routing'])) {
            $output['routing'] = array_map(function ($v) { return $v->toArray(); }, $this->routing);
        }
        if (isset($this->_usedProperties['serializer'])) {
            $output['serializer'] = $this->serializer->toArray();
        }
        if (isset($this->_usedProperties['transports'])) {
            $output['transports'] = array_map(function ($v) { return $v->toArray(); }, $this->transports);
        }
        if (isset($this->_usedProperties['failureTransport'])) {
            $output['failure_transport'] = $this->failureTransport;
        }
        if (isset($this->_usedProperties['resetOnMessage'])) {
            $output['reset_on_message'] = $this->resetOnMessage;
        }
        if (isset($this->_usedProperties['defaultBus'])) {
            $output['default_bus'] = $this->defaultBus;
        }
        if (isset($this->_usedProperties['buses'])) {
            $output['buses'] = array_map(function ($v) { return $v->toArray(); }, $this->buses);
        }
    
        return $output;
    }

}
