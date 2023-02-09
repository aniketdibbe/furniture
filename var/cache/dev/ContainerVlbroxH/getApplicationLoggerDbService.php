<?php

namespace ContainerVlbroxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplicationLoggerDbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Log\Handler\ApplicationLoggerDb' shared autowired service.
     *
     * @return \Pimcore\Log\Handler\ApplicationLoggerDb
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Log/Handler/ApplicationLoggerDb.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Log/Processor/ApplicationLoggerProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php';

        $container->services['Pimcore\\Log\\Handler\\ApplicationLoggerDb'] = $instance = new \Pimcore\Log\Handler\ApplicationLoggerDb(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()));

        $instance->pushProcessor(($container->privates['monolog.processor.psr_log_message'] ?? ($container->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));
        $instance->pushProcessor(new \Pimcore\Log\Processor\ApplicationLoggerProcessor());
        $instance->pushProcessor(new \Monolog\Processor\IntrospectionProcessor('DEBUG', [0 => 'Pimcore\\Log\\ApplicationLogger']));

        return $instance;
    }
}
