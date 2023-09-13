<?php

namespace ContainerWxTRhkP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Cache_CacheClearerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'jms_serializer.cache.cache_clearer' shared service.
     *
     * @return \JMS\SerializerBundle\Cache\CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['jms_serializer.cache.cache_clearer'] = new \JMS\SerializerBundle\Cache\CacheClearer(($container->privates['jms_serializer.metadata.cache.file_cache'] ??= new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer_default'))));
    }
}
