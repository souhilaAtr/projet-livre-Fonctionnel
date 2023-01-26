<?php

namespace ContainerXRDlDWw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8zNOZkpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8zNOZkp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8zNOZkp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'livresRepository' => ['privates', 'App\\Repository\\LivresRepository', 'getLivresRepositoryService', true],
        ], [
            'livresRepository' => 'App\\Repository\\LivresRepository',
        ]);
    }
}
