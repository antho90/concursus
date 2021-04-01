<?php

namespace ContainerWUEGxqw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HzYImL4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hzYImL4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hzYImL4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competitions' => ['privates', 'App\\Repository\\CompetitonRepository', 'getCompetitonRepositoryService', true],
        ], [
            'competitions' => 'App\\Repository\\CompetitonRepository',
        ]);
    }
}