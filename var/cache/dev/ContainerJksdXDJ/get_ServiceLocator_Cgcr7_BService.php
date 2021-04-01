<?php

namespace ContainerJksdXDJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cgcr7_BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cgcr7.b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cgcr7.b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.cgcr7.b.App\\Entity\\GeneralUser', NULL, 'Cannot autowire service ".service_locator.cgcr7.b": it references class "App\\Entity\\GeneralUser" but no such service exists.'],
        ], [
            'user' => 'App\\Entity\\GeneralUser',
        ]);
    }
}