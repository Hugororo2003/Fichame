<?php

namespace ContainerHgYkt9T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] = new \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
