<?php

namespace ContainerUfJqh6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GN0t2amService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GN0t2am' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GN0t2am'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventCategory' => ['privates', '.errored..service_locator.GN0t2am.App\\Entity\\EventCategory', NULL, 'Cannot autowire service ".service_locator.GN0t2am": it needs an instance of "App\\Entity\\EventCategory" but this type has been excluded in "config/services.yaml".'],
        ], [
            'eventCategory' => 'App\\Entity\\EventCategory',
        ]);
    }
}
