<?php

namespace ContainerUfJqh6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompanyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CompanyController' shared autowired service.
     *
     * @return \App\Controller\CompanyController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CompanyController'] = $instance = new \App\Controller\CompanyController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\CompanyController', $container));

        return $instance;
    }
}