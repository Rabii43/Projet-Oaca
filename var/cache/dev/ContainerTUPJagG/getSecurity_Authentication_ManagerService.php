<?php

namespace ContainerTUPJagG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_ManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.manager" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.manager" service is deprecated, use the new authenticator system instead.');

        $container->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.authentication.provider.dao.login'] ?? $container->load('getSecurity_Authentication_Provider_Dao_LoginService'));
            yield 1 => ($container->privates['security.authentication.provider.anonymous.login'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_LoginService'));
            yield 2 => ($container->privates['security.authentication.provider.anonymous.refresh'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_RefreshService'));
            yield 3 => ($container->privates['security.authentication.provider.guard.api'] ?? $container->load('getSecurity_Authentication_Provider_Guard_ApiService'));
            yield 4 => ($container->privates['security.authentication.provider.anonymous.api'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_ApiService'));
            yield 5 => ($container->privates['security.authentication.provider.anonymous.main'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_MainService'));
        }, 6), true);

        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}
