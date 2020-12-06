<?php

namespace ContainerS1fR6SL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HucVu8ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HucVu8Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HucVu8Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ProgramController::show' => ['privates', '.service_locator.6Q3SUSI', 'get_ServiceLocator_6Q3SUSIService', true],
            'App\\Controller\\ProgramController::showEpisode' => ['privates', '.service_locator.LFdZtJt', 'get_ServiceLocator_LFdZtJtService', true],
            'App\\Controller\\ProgramController::showSeason' => ['privates', '.service_locator.U7HHBPP', 'get_ServiceLocator_U7HHBPPService', true],
            'App\\Controller\\SeasonController::delete' => ['privates', '.service_locator.cBD1iKn', 'get_ServiceLocator_CBD1iKnService', true],
            'App\\Controller\\SeasonController::edit' => ['privates', '.service_locator.cBD1iKn', 'get_ServiceLocator_CBD1iKnService', true],
            'App\\Controller\\SeasonController::index' => ['privates', '.service_locator.J6iJgo9', 'get_ServiceLocator_J6iJgo9Service', true],
            'App\\Controller\\SeasonController::show' => ['privates', '.service_locator.cBD1iKn', 'get_ServiceLocator_CBD1iKnService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ProgramController:show' => ['privates', '.service_locator.6Q3SUSI', 'get_ServiceLocator_6Q3SUSIService', true],
            'App\\Controller\\ProgramController:showEpisode' => ['privates', '.service_locator.LFdZtJt', 'get_ServiceLocator_LFdZtJtService', true],
            'App\\Controller\\ProgramController:showSeason' => ['privates', '.service_locator.U7HHBPP', 'get_ServiceLocator_U7HHBPPService', true],
            'App\\Controller\\SeasonController:delete' => ['privates', '.service_locator.cBD1iKn', 'get_ServiceLocator_CBD1iKnService', true],
            'App\\Controller\\SeasonController:edit' => ['privates', '.service_locator.cBD1iKn', 'get_ServiceLocator_CBD1iKnService', true],
            'App\\Controller\\SeasonController:index' => ['privates', '.service_locator.J6iJgo9', 'get_ServiceLocator_J6iJgo9Service', true],
            'App\\Controller\\SeasonController:show' => ['privates', '.service_locator.cBD1iKn', 'get_ServiceLocator_CBD1iKnService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ProgramController::show' => '?',
            'App\\Controller\\ProgramController::showEpisode' => '?',
            'App\\Controller\\ProgramController::showSeason' => '?',
            'App\\Controller\\SeasonController::delete' => '?',
            'App\\Controller\\SeasonController::edit' => '?',
            'App\\Controller\\SeasonController::index' => '?',
            'App\\Controller\\SeasonController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ProgramController:show' => '?',
            'App\\Controller\\ProgramController:showEpisode' => '?',
            'App\\Controller\\ProgramController:showSeason' => '?',
            'App\\Controller\\SeasonController:delete' => '?',
            'App\\Controller\\SeasonController:edit' => '?',
            'App\\Controller\\SeasonController:index' => '?',
            'App\\Controller\\SeasonController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}