<?php

namespace ContainerXIP2FcU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchProductControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SearchProductController' shared autowired service.
     *
     * @return \App\Controller\SearchProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SearchProductController.php';

        $container->services['App\\Controller\\SearchProductController'] = $instance = new \App\Controller\SearchProductController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\SearchProductController', $container));

        return $instance;
    }
}
