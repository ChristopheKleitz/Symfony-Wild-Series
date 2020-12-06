<?php

namespace ContainerS1fR6SL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CBD1iKnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cBD1iKn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cBD1iKn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'season' => ['privates', '.errored..service_locator.cBD1iKn.App\\Entity\\Season', NULL, 'Cannot autowire service ".service_locator.cBD1iKn": it references class "App\\Entity\\Season" but no such service exists.'],
        ], [
            'season' => 'App\\Entity\\Season',
        ]);
    }
}