<?php

namespace ContainerJksdXDJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EpznR39Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EpznR39' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EpznR39'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\CompetitonRepository', 'getCompetitonRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\CompetitonRepository',
        ]);
    }
}
