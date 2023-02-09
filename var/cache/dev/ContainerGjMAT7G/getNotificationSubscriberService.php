<?php

namespace ContainerGjMAT7G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Workflow\EventSubscriber\NotificationSubscriber' shared autowired service.
     *
     * @return \Pimcore\Workflow\EventSubscriber\NotificationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/EventSubscriber/NotificationSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Notification/AbstractNotificationService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Notification/PimcoreNotificationService.php';

        $a = ($container->services['Pimcore\\Workflow\\Notification\\NotificationEmailService'] ?? $container->load('getNotificationEmailServiceService'));

        if (isset($container->privates['Pimcore\\Workflow\\EventSubscriber\\NotificationSubscriber'])) {
            return $container->privates['Pimcore\\Workflow\\EventSubscriber\\NotificationSubscriber'];
        }
        $b = ($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService'));

        if (isset($container->privates['Pimcore\\Workflow\\EventSubscriber\\NotificationSubscriber'])) {
            return $container->privates['Pimcore\\Workflow\\EventSubscriber\\NotificationSubscriber'];
        }
        $c = ($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService());

        return $container->privates['Pimcore\\Workflow\\EventSubscriber\\NotificationSubscriber'] = new \Pimcore\Workflow\EventSubscriber\NotificationSubscriber($a, new \Pimcore\Workflow\Notification\PimcoreNotificationService(($container->services['Pimcore\\Model\\Notification\\Service\\NotificationService'] ?? $container->load('getNotificationServiceService')), $c), $c, ($container->services['Pimcore\\Workflow\\ExpressionService'] ?? $container->load('getExpressionServiceService')), $b);
    }
}