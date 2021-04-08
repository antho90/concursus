<?php

namespace ContainerJ61ZPjx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LV5dZ0YService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lV5dZ0Y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lV5dZ0Y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competition' => ['privates', '.errored..service_locator.lV5dZ0Y.App\\Entity\\Competiton', NULL, 'Cannot autowire service ".service_locator.lV5dZ0Y": it references class "App\\Entity\\Competiton" but no such service exists.'],
            'generalUserRepository' => ['privates', 'App\\Repository\\GeneralUserRepository', 'getGeneralUserRepositoryService', true],
        ], [
            'competition' => 'App\\Entity\\Competiton',
            'generalUserRepository' => 'App\\Repository\\GeneralUserRepository',
        ]);
    }
}
