<?php

namespace Symfony\Config\Security;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProviderConfig'.\DIRECTORY_SEPARATOR.'ChainConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ProviderConfig 
{
    private $id;
    private $chain;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    public function chain(array $value = []): \Symfony\Config\Security\ProviderConfig\ChainConfig
    {
        if (null === $this->chain) {
            $this->chain = new \Symfony\Config\Security\ProviderConfig\ChainConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "chain()" has already been initialized. You cannot pass values the second time you call chain().');
        }
    
        return $this->chain;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['id'])) {
            $this->id = $value['id'];
            unset($value['id']);
        }
    
        if (isset($value['chain'])) {
            $this->chain = new \Symfony\Config\Security\ProviderConfig\ChainConfig($value['chain']);
            unset($value['chain']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->id) {
            $output['id'] = $this->id;
        }
        if (null !== $this->chain) {
            $output['chain'] = $this->chain->toArray();
        }
    
        return $output;
    }
    

}
