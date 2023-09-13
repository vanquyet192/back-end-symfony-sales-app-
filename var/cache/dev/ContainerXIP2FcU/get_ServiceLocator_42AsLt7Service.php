<?php

namespace ContainerXIP2FcU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_42AsLt7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.42AsLt7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.42AsLt7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'roleAdminRepository' => ['privates', 'App\\Repository\\RoleAdminRepository', 'getRoleAdminRepositoryService', true],
        ], [
            'roleAdminRepository' => 'App\\Repository\\RoleAdminRepository',
        ]);
    }
}
