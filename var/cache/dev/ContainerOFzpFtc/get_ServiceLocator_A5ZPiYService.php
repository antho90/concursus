<?php

namespace ContainerOFzpFtc;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A5ZPiYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a5Z_PiY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a5Z_PiY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomepageController::adminsList' => ['privates', '.service_locator.Vi8nPme', 'get_ServiceLocator_Vi8nPmeService', true],
            'App\\Controller\\HomepageController::classement_competition' => ['privates', '.service_locator.hzYImL4', 'get_ServiceLocator_HzYImL4Service', true],
            'App\\Controller\\HomepageController::competition' => ['privates', '.service_locator.EpznR39', 'get_ServiceLocator_EpznR39Service', true],
            'App\\Controller\\HomepageController::competitionsList' => ['privates', '.service_locator.hzYImL4', 'get_ServiceLocator_HzYImL4Service', true],
            'App\\Controller\\HomepageController::deleteCompetition' => ['privates', '.service_locator.Nz6nI5P', 'get_ServiceLocator_Nz6nI5PService', true],
            'App\\Controller\\HomepageController::deleteEquipe' => ['privates', '.service_locator.bPe7bSN', 'get_ServiceLocator_BPe7bSNService', true],
            'App\\Controller\\HomepageController::deleteUser' => ['privates', '.service_locator.cgcr7.b', 'get_ServiceLocator_Cgcr7_BService', true],
            'App\\Controller\\HomepageController::editCompetition' => ['privates', '.service_locator.Nz6nI5P', 'get_ServiceLocator_Nz6nI5PService', true],
            'App\\Controller\\HomepageController::editEquipe' => ['privates', '.service_locator.LNmG8Ne', 'get_ServiceLocator_LNmG8NeService', true],
            'App\\Controller\\HomepageController::editUser' => ['privates', '.service_locator.cgcr7.b', 'get_ServiceLocator_Cgcr7_BService', true],
            'App\\Controller\\HomepageController::equipeList' => ['privates', '.service_locator.Aiaugix', 'get_ServiceLocator_AiaugixService', true],
            'App\\Controller\\HomepageController::index' => ['privates', '.service_locator.EpznR39', 'get_ServiceLocator_EpznR39Service', true],
            'App\\Controller\\HomepageController::jugesList' => ['privates', '.service_locator.Vi8nPme', 'get_ServiceLocator_Vi8nPmeService', true],
            'App\\Controller\\HomepageController::mentorsList' => ['privates', '.service_locator.Vi8nPme', 'get_ServiceLocator_Vi8nPmeService', true],
            'App\\Controller\\HomepageController::newEquipe' => ['privates', '.service_locator.EpznR39', 'get_ServiceLocator_EpznR39Service', true],
            'App\\Controller\\HomepageController::newUser' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\HomepageController::programme' => ['privates', '.service_locator.EpznR39', 'get_ServiceLocator_EpznR39Service', true],
            'App\\Controller\\HomepageController::usersList' => ['privates', '.service_locator.Vi8nPme', 'get_ServiceLocator_Vi8nPmeService', true],
            'App\\Controller\\RegistrationController::registerAction' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController::registrationMentor' => ['privates', '.service_locator.Oi4_xhu', 'get_ServiceLocator_Oi4XhuService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\HomepageController:adminsList' => ['privates', '.service_locator.Vi8nPme', 'get_ServiceLocator_Vi8nPmeService', true],
            'App\\Controller\\HomepageController:classement_competition' => ['privates', '.service_locator.hzYImL4', 'get_ServiceLocator_HzYImL4Service', true],
            'App\\Controller\\HomepageController:competition' => ['privates', '.service_locator.EpznR39', 'get_ServiceLocator_EpznR39Service', true],
            'App\\Controller\\HomepageController:competitionsList' => ['privates', '.service_locator.hzYImL4', 'get_ServiceLocator_HzYImL4Service', true],
            'App\\Controller\\HomepageController:deleteCompetition' => ['privates', '.service_locator.Nz6nI5P', 'get_ServiceLocator_Nz6nI5PService', true],
            'App\\Controller\\HomepageController:deleteEquipe' => ['privates', '.service_locator.bPe7bSN', 'get_ServiceLocator_BPe7bSNService', true],
            'App\\Controller\\HomepageController:deleteUser' => ['privates', '.service_locator.cgcr7.b', 'get_ServiceLocator_Cgcr7_BService', true],
            'App\\Controller\\HomepageController:editCompetition' => ['privates', '.service_locator.Nz6nI5P', 'get_ServiceLocator_Nz6nI5PService', true],
            'App\\Controller\\HomepageController:editEquipe' => ['privates', '.service_locator.LNmG8Ne', 'get_ServiceLocator_LNmG8NeService', true],
            'App\\Controller\\HomepageController:editUser' => ['privates', '.service_locator.cgcr7.b', 'get_ServiceLocator_Cgcr7_BService', true],
            'App\\Controller\\HomepageController:equipeList' => ['privates', '.service_locator.Aiaugix', 'get_ServiceLocator_AiaugixService', true],
            'App\\Controller\\HomepageController:index' => ['privates', '.service_locator.EpznR39', 'get_ServiceLocator_EpznR39Service', true],
            'App\\Controller\\HomepageController:jugesList' => ['privates', '.service_locator.Vi8nPme', 'get_ServiceLocator_Vi8nPmeService', true],
            'App\\Controller\\HomepageController:mentorsList' => ['privates', '.service_locator.Vi8nPme', 'get_ServiceLocator_Vi8nPmeService', true],
            'App\\Controller\\HomepageController:newEquipe' => ['privates', '.service_locator.EpznR39', 'get_ServiceLocator_EpznR39Service', true],
            'App\\Controller\\HomepageController:newUser' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\HomepageController:programme' => ['privates', '.service_locator.EpznR39', 'get_ServiceLocator_EpznR39Service', true],
            'App\\Controller\\HomepageController:usersList' => ['privates', '.service_locator.Vi8nPme', 'get_ServiceLocator_Vi8nPmeService', true],
            'App\\Controller\\RegistrationController:registerAction' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController:registrationMentor' => ['privates', '.service_locator.Oi4_xhu', 'get_ServiceLocator_Oi4XhuService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\HomepageController::adminsList' => '?',
            'App\\Controller\\HomepageController::classement_competition' => '?',
            'App\\Controller\\HomepageController::competition' => '?',
            'App\\Controller\\HomepageController::competitionsList' => '?',
            'App\\Controller\\HomepageController::deleteCompetition' => '?',
            'App\\Controller\\HomepageController::deleteEquipe' => '?',
            'App\\Controller\\HomepageController::deleteUser' => '?',
            'App\\Controller\\HomepageController::editCompetition' => '?',
            'App\\Controller\\HomepageController::editEquipe' => '?',
            'App\\Controller\\HomepageController::editUser' => '?',
            'App\\Controller\\HomepageController::equipeList' => '?',
            'App\\Controller\\HomepageController::index' => '?',
            'App\\Controller\\HomepageController::jugesList' => '?',
            'App\\Controller\\HomepageController::mentorsList' => '?',
            'App\\Controller\\HomepageController::newEquipe' => '?',
            'App\\Controller\\HomepageController::newUser' => '?',
            'App\\Controller\\HomepageController::programme' => '?',
            'App\\Controller\\HomepageController::usersList' => '?',
            'App\\Controller\\RegistrationController::registerAction' => '?',
            'App\\Controller\\SecurityController::registrationMentor' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\HomepageController:adminsList' => '?',
            'App\\Controller\\HomepageController:classement_competition' => '?',
            'App\\Controller\\HomepageController:competition' => '?',
            'App\\Controller\\HomepageController:competitionsList' => '?',
            'App\\Controller\\HomepageController:deleteCompetition' => '?',
            'App\\Controller\\HomepageController:deleteEquipe' => '?',
            'App\\Controller\\HomepageController:deleteUser' => '?',
            'App\\Controller\\HomepageController:editCompetition' => '?',
            'App\\Controller\\HomepageController:editEquipe' => '?',
            'App\\Controller\\HomepageController:editUser' => '?',
            'App\\Controller\\HomepageController:equipeList' => '?',
            'App\\Controller\\HomepageController:index' => '?',
            'App\\Controller\\HomepageController:jugesList' => '?',
            'App\\Controller\\HomepageController:mentorsList' => '?',
            'App\\Controller\\HomepageController:newEquipe' => '?',
            'App\\Controller\\HomepageController:newUser' => '?',
            'App\\Controller\\HomepageController:programme' => '?',
            'App\\Controller\\HomepageController:usersList' => '?',
            'App\\Controller\\RegistrationController:registerAction' => '?',
            'App\\Controller\\SecurityController:registrationMentor' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
