<?php

namespace ContainerGjMAT7G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostStateChangeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\Bundle\Helper\PostStateChange' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\Bundle\Helper\PostStateChange
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/Bundle/Helper/PostStateChange.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Cache/Symfony/CacheClearer.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Tool/AssetsInstaller.php';

        return $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\Helper\\PostStateChange'] = new \Pimcore\Bundle\CoreBundle\Command\Bundle\Helper\PostStateChange(($container->services['Pimcore\\Cache\\Symfony\\CacheClearer'] ?? ($container->services['Pimcore\\Cache\\Symfony\\CacheClearer'] = new \Pimcore\Cache\Symfony\CacheClearer())), ($container->services['Pimcore\\Tool\\AssetsInstaller'] ?? ($container->services['Pimcore\\Tool\\AssetsInstaller'] = new \Pimcore\Tool\AssetsInstaller())), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
