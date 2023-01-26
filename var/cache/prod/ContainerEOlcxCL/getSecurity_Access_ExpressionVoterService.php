<?php

namespace ContainerEOlcxCL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Access_ExpressionVoterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService());

        if (isset($container->privates['security.access.expression_voter'])) {
            return $container->privates['security.access.expression_voter'];
        }

        return $container->privates['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($container->privates['cache.security_expression_language'] ?? $container->load('getCache_SecurityExpressionLanguageService'))), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $a, ($container->privates['security.role_hierarchy'] ?? $container->getSecurity_RoleHierarchyService()));
    }
}
