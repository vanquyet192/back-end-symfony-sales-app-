<?php

namespace ContainerOh8RyQT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SWaVUEgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sWaVUEg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sWaVUEg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'admin' => ['privates', '.errored..service_locator.sWaVUEg.App\\Entity\\Admin', NULL, 'Cannot autowire service ".service_locator.sWaVUEg": it needs an instance of "App\\Entity\\Admin" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'admin' => 'App\\Entity\\Admin',
            'entityManager' => '?',
        ]);
    }
}
