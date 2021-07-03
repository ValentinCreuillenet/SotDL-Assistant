<?php

namespace Symfony\Config\Security;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FirewallConfig'.\DIRECTORY_SEPARATOR.'LogoutConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FirewallConfig'.\DIRECTORY_SEPARATOR.'SwitchUserConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FirewallConfig 
{
    private $pattern;
    private $host;
    private $methods;
    private $security;
    private $userChecker;
    private $requestMatcher;
    private $accessDeniedUrl;
    private $accessDeniedHandler;
    private $entryPoint;
    private $provider;
    private $stateless;
    private $lazy;
    private $context;
    private $logout;
    private $switchUser;
    private $requiredBadges;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pattern($value): self
    {
        $this->pattern = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function methods($value): self
    {
        $this->methods = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function security($value): self
    {
        $this->security = $value;
    
        return $this;
    }
    
    /**
     * The UserChecker to use when authenticating users in this firewall.
     * @default 'security.user_checker'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userChecker($value): self
    {
        $this->userChecker = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requestMatcher($value): self
    {
        $this->requestMatcher = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessDeniedUrl($value): self
    {
        $this->accessDeniedUrl = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessDeniedHandler($value): self
    {
        $this->accessDeniedHandler = $value;
    
        return $this;
    }
    
    /**
     * An enabled authenticator name or a service id that implements "Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface"
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function entryPoint($value): self
    {
        $this->entryPoint = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): self
    {
        $this->provider = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function stateless($value): self
    {
        $this->stateless = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function lazy($value): self
    {
        $this->lazy = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function context($value): self
    {
        $this->context = $value;
    
        return $this;
    }
    
    public function logout(array $value = []): \Symfony\Config\Security\FirewallConfig\LogoutConfig
    {
        if (null === $this->logout) {
            $this->logout = new \Symfony\Config\Security\FirewallConfig\LogoutConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "logout()" has already been initialized. You cannot pass values the second time you call logout().');
        }
    
        return $this->logout;
    }
    
    public function switchUser(array $value = []): \Symfony\Config\Security\FirewallConfig\SwitchUserConfig
    {
        if (null === $this->switchUser) {
            $this->switchUser = new \Symfony\Config\Security\FirewallConfig\SwitchUserConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "switchUser()" has already been initialized. You cannot pass values the second time you call switchUser().');
        }
    
        return $this->switchUser;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function requiredBadges($value): self
    {
        $this->requiredBadges = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['pattern'])) {
            $this->pattern = $value['pattern'];
            unset($value['pattern']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['methods'])) {
            $this->methods = $value['methods'];
            unset($value['methods']);
        }
    
        if (isset($value['security'])) {
            $this->security = $value['security'];
            unset($value['security']);
        }
    
        if (isset($value['user_checker'])) {
            $this->userChecker = $value['user_checker'];
            unset($value['user_checker']);
        }
    
        if (isset($value['request_matcher'])) {
            $this->requestMatcher = $value['request_matcher'];
            unset($value['request_matcher']);
        }
    
        if (isset($value['access_denied_url'])) {
            $this->accessDeniedUrl = $value['access_denied_url'];
            unset($value['access_denied_url']);
        }
    
        if (isset($value['access_denied_handler'])) {
            $this->accessDeniedHandler = $value['access_denied_handler'];
            unset($value['access_denied_handler']);
        }
    
        if (isset($value['entry_point'])) {
            $this->entryPoint = $value['entry_point'];
            unset($value['entry_point']);
        }
    
        if (isset($value['provider'])) {
            $this->provider = $value['provider'];
            unset($value['provider']);
        }
    
        if (isset($value['stateless'])) {
            $this->stateless = $value['stateless'];
            unset($value['stateless']);
        }
    
        if (isset($value['lazy'])) {
            $this->lazy = $value['lazy'];
            unset($value['lazy']);
        }
    
        if (isset($value['context'])) {
            $this->context = $value['context'];
            unset($value['context']);
        }
    
        if (isset($value['logout'])) {
            $this->logout = new \Symfony\Config\Security\FirewallConfig\LogoutConfig($value['logout']);
            unset($value['logout']);
        }
    
        if (isset($value['switch_user'])) {
            $this->switchUser = new \Symfony\Config\Security\FirewallConfig\SwitchUserConfig($value['switch_user']);
            unset($value['switch_user']);
        }
    
        if (isset($value['required_badges'])) {
            $this->requiredBadges = $value['required_badges'];
            unset($value['required_badges']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->pattern) {
            $output['pattern'] = $this->pattern;
        }
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->methods) {
            $output['methods'] = $this->methods;
        }
        if (null !== $this->security) {
            $output['security'] = $this->security;
        }
        if (null !== $this->userChecker) {
            $output['user_checker'] = $this->userChecker;
        }
        if (null !== $this->requestMatcher) {
            $output['request_matcher'] = $this->requestMatcher;
        }
        if (null !== $this->accessDeniedUrl) {
            $output['access_denied_url'] = $this->accessDeniedUrl;
        }
        if (null !== $this->accessDeniedHandler) {
            $output['access_denied_handler'] = $this->accessDeniedHandler;
        }
        if (null !== $this->entryPoint) {
            $output['entry_point'] = $this->entryPoint;
        }
        if (null !== $this->provider) {
            $output['provider'] = $this->provider;
        }
        if (null !== $this->stateless) {
            $output['stateless'] = $this->stateless;
        }
        if (null !== $this->lazy) {
            $output['lazy'] = $this->lazy;
        }
        if (null !== $this->context) {
            $output['context'] = $this->context;
        }
        if (null !== $this->logout) {
            $output['logout'] = $this->logout->toArray();
        }
        if (null !== $this->switchUser) {
            $output['switch_user'] = $this->switchUser->toArray();
        }
        if (null !== $this->requiredBadges) {
            $output['required_badges'] = $this->requiredBadges;
        }
    
        return $output;
    }
    

}
