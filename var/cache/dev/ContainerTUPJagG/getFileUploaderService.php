<?php

namespace ContainerTUPJagG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUploaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\FileUploader' shared autowired service.
     *
     * @return \App\Service\FileUploader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/FileUploader.php';

        return $container->privates['App\\Service\\FileUploader'] = new \App\Service\FileUploader(($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));
    }
}
