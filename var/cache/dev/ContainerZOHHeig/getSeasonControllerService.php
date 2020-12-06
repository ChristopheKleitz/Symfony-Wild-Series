<?php

namespace ContainerZOHHeig;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSeasonControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SeasonController' shared autowired service.
     *
     * @return \App\Controller\SeasonController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SeasonController.php';

        $container->services['App\\Controller\\SeasonController'] = $instance = new \App\Controller\SeasonController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\SeasonController', $container));

        return $instance;
    }
}
