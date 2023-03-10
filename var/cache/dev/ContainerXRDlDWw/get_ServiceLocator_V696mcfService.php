<?php

namespace ContainerXRDlDWw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V696mcfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v696mcf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v696mcf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'livre' => ['privates', '.errored..service_locator.v696mcf.App\\Entity\\Livres', NULL, 'Cannot autowire service ".service_locator.v696mcf": it references class "App\\Entity\\Livres" but no such service exists.'],
            'livresRepository' => ['privates', 'App\\Repository\\LivresRepository', 'getLivresRepositoryService', true],
        ], [
            'livre' => 'App\\Entity\\Livres',
            'livresRepository' => 'App\\Repository\\LivresRepository',
        ]);
    }
}
