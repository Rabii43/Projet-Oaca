<?php

namespace ContainerVDUAYXX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_TraceableCacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.traceable_cache' shared service.
     *
     * @return \JMS\SerializerBundle\Debug\TraceableDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/Debug/TraceableDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/ClearableCacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/FileCache.php';

        return $container->privates['jms_serializer.metadata.traceable_cache'] = new \JMS\SerializerBundle\Debug\TraceableDriver(new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer')));
    }
}
