<?php

namespace ContainerVlbroxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_ConditionHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.condition_handler' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['scheb_two_factor.condition_handler'] = $container->createProxy('ConditionAuthenticationHandler_a1ee12f', function () use ($container) {
                return \ConditionAuthenticationHandler_a1ee12f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/ConditionAuthenticationHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/TwoFactorConditionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/DefaultTwoFactorCondition.php';

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler(($container->privates['scheb_two_factor.authenticated_token_handler'] ?? $container->load('getSchebTwoFactor_AuthenticatedTokenHandlerService')), new \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\DefaultTwoFactorCondition());
    }
}
