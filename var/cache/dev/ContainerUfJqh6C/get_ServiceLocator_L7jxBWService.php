<?php

namespace ContainerUfJqh6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L7jxBWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L7jx_BW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L7jx_BW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'job' => ['privates', '.errored..service_locator.L7jx_BW.App\\Entity\\Job', NULL, 'Cannot autowire service ".service_locator.L7jx_BW": it needs an instance of "App\\Entity\\Job" but this type has been excluded in "config/services.yaml".'],
            'jobRepository' => ['privates', 'App\\Repository\\JobRepository', 'getJobRepositoryService', true],
        ], [
            'job' => 'App\\Entity\\Job',
            'jobRepository' => 'App\\Repository\\JobRepository',
        ]);
    }
}
