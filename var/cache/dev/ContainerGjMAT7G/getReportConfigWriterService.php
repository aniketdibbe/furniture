<?php

namespace ContainerGjMAT7G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportConfigWriterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Config\ReportConfigWriter' shared autowired service.
     *
     * @return \Pimcore\Config\ReportConfigWriter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Config/ReportConfigWriter.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['Pimcore\\Config\\ReportConfigWriter'])) {
            return $container->privates['Pimcore\\Config\\ReportConfigWriter'];
        }

        return $container->privates['Pimcore\\Config\\ReportConfigWriter'] = new \Pimcore\Config\ReportConfigWriter($a);
    }
}
