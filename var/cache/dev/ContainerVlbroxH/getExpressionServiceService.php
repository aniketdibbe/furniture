<?php

namespace ContainerVlbroxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExpressionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Workflow\ExpressionService' shared autowired service.
     *
     * @return \Pimcore\Workflow\ExpressionService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/ExpressionService.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/workflow/EventListener/ExpressionLanguage.php';

        $a = ($container->privates['debug.security.access.decision_manager'] ?? $container->getDebug_Security_Access_DecisionManagerService());

        if (isset($container->services['Pimcore\\Workflow\\ExpressionService'])) {
            return $container->services['Pimcore\\Workflow\\ExpressionService'];
        }
        $b = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());

        return $container->services['Pimcore\\Workflow\\ExpressionService'] = new \Pimcore\Workflow\ExpressionService(new \Symfony\Component\Workflow\EventListener\ExpressionLanguage(($container->services['cache.app'] ?? $container->getCache_AppService())), $b, new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($b, $a, false, false), ($container->privates['scheb_two_factor.security.authentication.trust_resolver'] ?? $container->getSchebTwoFactor_Security_Authentication_TrustResolverService()), ($container->privates['security.role_hierarchy'] ?? $container->getSecurity_RoleHierarchyService()), ($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()));
    }
}
