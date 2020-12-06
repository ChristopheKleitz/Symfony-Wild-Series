<?php

namespace ContainerS1fR6SL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J6iJgo9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.J6iJgo9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.J6iJgo9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'seasonRepository' => ['privates', 'App\\Repository\\SeasonRepository', 'getSeasonRepositoryService', true],
        ], [
            'seasonRepository' => 'App\\Repository\\SeasonRepository',
        ]);
    }
}
