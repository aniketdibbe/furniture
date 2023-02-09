<?php

namespace ContainerVlbroxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPHPObjectBrickClassDumperInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\ClassBuilder\PHPObjectBrickClassDumperInterface' shared autowired service.
     *
     * @return \Pimcore\DataObject\ClassBuilder\PHPObjectBrickClassDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPObjectBrickClassDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPObjectBrickClassDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ObjectBrickClassBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ObjectBrickClassBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionDocBlockBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionDocBlockBuilder.php';

        return $container->services['Pimcore\\DataObject\\ClassBuilder\\PHPObjectBrickClassDumperInterface'] = new \Pimcore\DataObject\ClassBuilder\PHPObjectBrickClassDumper(new \Pimcore\DataObject\ClassBuilder\ObjectBrickClassBuilder(($container->services['Pimcore\\DataObject\\ClassBuilder\\FieldDefinitionDocBlockBuilderInterface'] ?? ($container->services['Pimcore\\DataObject\\ClassBuilder\\FieldDefinitionDocBlockBuilderInterface'] = new \Pimcore\DataObject\ClassBuilder\FieldDefinitionDocBlockBuilder()))));
    }
}
