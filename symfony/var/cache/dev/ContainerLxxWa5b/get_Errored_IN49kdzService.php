<?php

namespace ContainerLxxWa5b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_IN49kdzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.iN49kdz' shared service.
     *
     * @return \App\Controller\Request
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\HolidayController::validate()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?');
    }
}
