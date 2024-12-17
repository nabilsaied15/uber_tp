<?php

namespace ContainerQqYqG2o;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CSgCe1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CSg_ce1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CSg_ce1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\ProduitController::list' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::list()', 'getProduitControllerlistService', true],
            'App\\Controller\\ProduitController::details' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::details()', 'getProduitControllerdetailsService', true],
            'App\\Controller\\ProduitController::edit' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::edit()', 'getProduitControllereditService', true],
            'App\\Controller\\ProduitController::detail' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::detail()', 'getProduitControllerdetailService', true],
            'App\\Controller\\ProduitController::delete' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::delete()', 'getProduitControllerdeleteService', true],
            'App\\Controller\\TableController::commander' => ['privates', '.service_locator.iMJiwmz.App\\Controller\\TableController::commander()', 'getTableControllercommanderService', true],
            'App\\Controller\\TableController::livrer' => ['privates', '.service_locator.MFinYDt.App\\Controller\\TableController::livrer()', 'getTableControllerlivrerService', true],
            'App\\Controller\\TableController::vender' => ['privates', '.service_locator.xz4AyKk.App\\Controller\\TableController::vender()', 'getTableControllervenderService', true],
            'App\\Controller\\UserController::list' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::list()', 'getUserControllerlistService', true],
            'App\\Controller\\UserController::add' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::add()', 'getUserControlleraddService', true],
            'App\\Controller\\UserController::editUser' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::editUser()', 'getUserControllereditUserService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
            'App\\Controller\\UserController::userDetails' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::userDetails()', 'getUserControlleruserDetailsService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\ProduitController:list' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::list()', 'getProduitControllerlistService', true],
            'App\\Controller\\ProduitController:details' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::details()', 'getProduitControllerdetailsService', true],
            'App\\Controller\\ProduitController:edit' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::edit()', 'getProduitControllereditService', true],
            'App\\Controller\\ProduitController:detail' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::detail()', 'getProduitControllerdetailService', true],
            'App\\Controller\\ProduitController:delete' => ['privates', '.service_locator.P.blNFL.App\\Controller\\ProduitController::delete()', 'getProduitControllerdeleteService', true],
            'App\\Controller\\TableController:commander' => ['privates', '.service_locator.iMJiwmz.App\\Controller\\TableController::commander()', 'getTableControllercommanderService', true],
            'App\\Controller\\TableController:livrer' => ['privates', '.service_locator.MFinYDt.App\\Controller\\TableController::livrer()', 'getTableControllerlivrerService', true],
            'App\\Controller\\TableController:vender' => ['privates', '.service_locator.xz4AyKk.App\\Controller\\TableController::vender()', 'getTableControllervenderService', true],
            'App\\Controller\\UserController:list' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::list()', 'getUserControllerlistService', true],
            'App\\Controller\\UserController:add' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::add()', 'getUserControlleraddService', true],
            'App\\Controller\\UserController:editUser' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::editUser()', 'getUserControllereditUserService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
            'App\\Controller\\UserController:userDetails' => ['privates', '.service_locator.P.blNFL.App\\Controller\\UserController::userDetails()', 'getUserControlleruserDetailsService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\ProduitController::list' => '?',
            'App\\Controller\\ProduitController::details' => '?',
            'App\\Controller\\ProduitController::edit' => '?',
            'App\\Controller\\ProduitController::detail' => '?',
            'App\\Controller\\ProduitController::delete' => '?',
            'App\\Controller\\TableController::commander' => '?',
            'App\\Controller\\TableController::livrer' => '?',
            'App\\Controller\\TableController::vender' => '?',
            'App\\Controller\\UserController::list' => '?',
            'App\\Controller\\UserController::add' => '?',
            'App\\Controller\\UserController::editUser' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::userDetails' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\ProduitController:list' => '?',
            'App\\Controller\\ProduitController:details' => '?',
            'App\\Controller\\ProduitController:edit' => '?',
            'App\\Controller\\ProduitController:detail' => '?',
            'App\\Controller\\ProduitController:delete' => '?',
            'App\\Controller\\TableController:commander' => '?',
            'App\\Controller\\TableController:livrer' => '?',
            'App\\Controller\\TableController:vender' => '?',
            'App\\Controller\\UserController:list' => '?',
            'App\\Controller\\UserController:add' => '?',
            'App\\Controller\\UserController:editUser' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:userDetails' => '?',
        ]);
    }
}