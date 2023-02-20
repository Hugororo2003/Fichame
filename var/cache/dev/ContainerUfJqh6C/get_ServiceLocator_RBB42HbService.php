<?php

namespace ContainerUfJqh6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RBB42HbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RBB42Hb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RBB42Hb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'taskRepository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.RBB42Hb.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.RBB42Hb": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'taskRepository' => 'App\\Repository\\TaskRepository',
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
