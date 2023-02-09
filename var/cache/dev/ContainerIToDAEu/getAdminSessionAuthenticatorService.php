<?php

namespace ContainerIToDAEu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminSessionAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\Security\Authenticator\AdminSessionAuthenticator' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\Authenticator\AdminSessionAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Security/Authenticator/AdminAbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Security/Authenticator/AdminSessionAuthenticator.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminSessionAuthenticator'])) {
            return $container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminSessionAuthenticator'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminSessionAuthenticator'])) {
            return $container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminSessionAuthenticator'];
        }

        $container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminSessionAuthenticator'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\Authenticator\AdminSessionAuthenticator($a, $b, ($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService()));

        $c = ($container->services['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService());

        $instance->setLogger($c);
        $instance->setLogger($c);

        return $instance;
    }
}
