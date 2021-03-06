<?php

namespace ContainerVDUAYXX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSynchroUsersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\synchroUsers' shared autowired service.
     *
     * @return \App\Service\synchroUsers
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MainController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/synchroUsers.php';

        $container->services['App\\Service\\synchroUsers'] = $instance = new \App\Service\synchroUsers(($container->services['.container.private.security.password_encoder'] ?? $container->load('get_Container_Private_Security_PasswordEncoderService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Service\\synchroUsers', $container));

        return $instance;
    }
}
