<?php

namespace ContainerJ61ZPjx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nz6nI5PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Nz6nI5P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Nz6nI5P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competition' => ['privates', '.errored..service_locator.Nz6nI5P.App\\Entity\\Competiton', NULL, 'Cannot autowire service ".service_locator.Nz6nI5P": it references class "App\\Entity\\Competiton" but no such service exists.'],
        ], [
            'competition' => 'App\\Entity\\Competiton',
        ]);
    }
}