<?php

namespace ContainerEOlcxCL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartItemTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CartItemType' shared autowired service.
     *
     * @return \App\Form\CartItemType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CartItemType'] = new \App\Form\CartItemType();
    }
}
