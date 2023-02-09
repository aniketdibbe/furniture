<?php

namespace ContainerVlbroxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContentTemplateListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/EventListener/Frontend/ContentTemplateListener.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ContentTemplateListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener(($container->services['Pimcore\\Http\\Request\\Resolver\\TemplateResolver'] ?? $container->load('getTemplateResolverService')));

        $instance->setPimcoreContextResolver(($container->services['Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver'] ?? $container->getPimcoreContextResolverService()));

        return $instance;
    }
}
