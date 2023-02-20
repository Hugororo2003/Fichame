<?php

namespace ContainerUfJqh6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J0mZ49Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j0mZ49_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j0mZ49_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobRepository' => ['privates', 'App\\Repository\\JobRepository', 'getJobRepositoryService', true],
            'taskRepository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService', true],
        ], [
            'jobRepository' => 'App\\Repository\\JobRepository',
            'taskRepository' => 'App\\Repository\\TaskRepository',
        ]);
    }
}
