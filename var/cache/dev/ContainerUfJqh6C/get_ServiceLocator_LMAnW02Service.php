<?php

namespace ContainerUfJqh6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LMAnW02Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LMAnW02' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LMAnW02'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'company' => ['privates', '.errored..service_locator.LMAnW02.App\\Entity\\Company', NULL, 'Cannot autowire service ".service_locator.LMAnW02": it needs an instance of "App\\Entity\\Company" but this type has been excluded in "config/services.yaml".'],
            'companyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService', true],
        ], [
            'company' => 'App\\Entity\\Company',
            'companyRepository' => 'App\\Repository\\CompanyRepository',
        ]);
    }
}