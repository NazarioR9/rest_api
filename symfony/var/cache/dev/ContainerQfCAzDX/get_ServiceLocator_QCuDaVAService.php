<?php

namespace ContainerQfCAzDX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QCuDaVAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QCuDaVA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QCuDaVA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HolidayController::add' => ['privates', '.service_locator._8WMeJ4', 'get_ServiceLocator_8WMeJ4Service', true],
            'App\\Controller\\HolidayController::validate' => ['privates', '.service_locator.jE3vEuM', 'get_ServiceLocator_JE3vEuMService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\HolidayController:add' => ['privates', '.service_locator._8WMeJ4', 'get_ServiceLocator_8WMeJ4Service', true],
            'App\\Controller\\HolidayController:validate' => ['privates', '.service_locator.jE3vEuM', 'get_ServiceLocator_JE3vEuMService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\HolidayController::add' => '?',
            'App\\Controller\\HolidayController::validate' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\HolidayController:add' => '?',
            'App\\Controller\\HolidayController:validate' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
