<?php

namespace ContainerIToDAEu;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
     */
    private $valueHolder12a40 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer08fab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf4c67 = [
        
    ];

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'build', array('params' => $params), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'getRenderer', array('alias' => $alias), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'setCharset', array('charset' => $charset), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'getCharset', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->getCharset();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($instance);

        $instance->initializer08fab = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder12a40) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder12a40 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder12a40->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, '__get', ['name' => $name], $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        if (isset(self::$publicPropertiesf4c67[$name])) {
            return $this->valueHolder12a40->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12a40;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder12a40;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12a40;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder12a40;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, '__isset', array('name' => $name), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12a40;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder12a40;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, '__unset', array('name' => $name), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12a40;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder12a40;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, '__clone', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        $this->valueHolder12a40 = clone $this->valueHolder12a40;
    }

    public function __sleep()
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, '__sleep', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return array('valueHolder12a40');
    }

    public function __wakeup()
    {
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer08fab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer08fab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'initializeProxy', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder12a40;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder12a40;
    }
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
