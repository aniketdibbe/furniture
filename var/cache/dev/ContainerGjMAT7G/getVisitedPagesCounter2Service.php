<?php

namespace ContainerGjMAT7G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVisitedPagesCounter2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\Service\VisitedPagesCounter' shared autowired service.
     *
     * @return \Pimcore\Targeting\Service\VisitedPagesCounter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Service/VisitedPagesCounter.php';

        $a = ($container->privates['Pimcore\\Targeting\\Storage\\CookieStorage'] ?? $container->getCookieStorageService());

        if (isset($container->privates['Pimcore\\Targeting\\Service\\VisitedPagesCounter'])) {
            return $container->privates['Pimcore\\Targeting\\Service\\VisitedPagesCounter'];
        }

        return $container->privates['Pimcore\\Targeting\\Service\\VisitedPagesCounter'] = new \Pimcore\Targeting\Service\VisitedPagesCounter($a);
    }
}