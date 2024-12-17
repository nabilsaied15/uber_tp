<?php

namespace ContainerQqYqG2o;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTableControllercommanderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iMJiwmz.App\Controller\TableController::commander()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iMJiwmz.App\\Controller\\TableController::commander()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commanderRepository' => ['privates', 'App\\Repository\\CommanderRepository', 'getCommanderRepositoryService', true],
        ], [
            'commanderRepository' => 'App\\Repository\\CommanderRepository',
        ]))->withContext('App\\Controller\\TableController::commander()', $container);
    }
}
