<?php

namespace ContainerIToDAEu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_Default_PimcoreAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.default.pimcore_admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/DefaultLogoutListener.php';

        return $container->privates['security.logout.listener.default.pimcore_admin'] = new \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener(($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService()), 'pimcore_admin_login');
    }
}
