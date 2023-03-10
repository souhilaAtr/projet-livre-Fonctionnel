<?php

namespace ContainerEOlcxCL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9Z_YoLiService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.9Z.yoLi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9Z.yoLi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'livresRepository' => ['privates', 'App\\Repository\\LivresRepository', 'getLivresRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'livresRepository' => 'App\\Repository\\LivresRepository',
            'security' => '?',
        ]);
    }
}
