<?php

namespace ContainerEOlcxCL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ResetPasswordController' shared autowired service.
     *
     * @return \App\Controller\ResetPasswordController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ResetPasswordController'] = $instance = new \App\Controller\ResetPasswordController(new \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper(new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator($container->getEnv('APP_SECRET'), new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator()), ($container->privates['symfonycasts.reset_password.cleaner'] ?? $container->load('getSymfonycasts_ResetPassword_CleanerService')), ($container->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $container->load('getResetPasswordRequestRepositoryService')), 3600, 3600), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ResetPasswordController', $container));

        return $instance;
    }
}
