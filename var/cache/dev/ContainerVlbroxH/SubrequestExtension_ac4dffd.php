<?php

namespace ContainerVlbroxH;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/SubrequestExtension.php';

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\SubrequestExtension|null wrapped object, if the proxy is initialized
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

    public function getFunctions() : array
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'getFunctions', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->getFunctions();
    }

    public function getTokenParsers()
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'getTokenParsers', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'getNodeVisitors', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->getNodeVisitors();
    }

    public function getFilters()
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'getFilters', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->getFilters();
    }

    public function getTests()
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'getTests', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->getTests();
    }

    public function getOperators()
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, 'getOperators', array(), $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        return $this->valueHolder12a40->getOperators();
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

        unset($instance->incHelper);

        $instance->initializer08fab = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Twig\Extension\Templating\Inc $incHelper)
    {
        static $reflection;

        if (! $this->valueHolder12a40) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolder12a40 = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper);

        }

        $this->valueHolder12a40->__construct($incHelper);
    }

    public function & __get($name)
    {
        $this->initializer08fab && ($this->initializer08fab->__invoke($valueHolder12a40, $this, '__get', ['name' => $name], $this->initializer08fab) || 1) && $this->valueHolder12a40 = $valueHolder12a40;

        if (isset(self::$publicPropertiesf4c67[$name])) {
            return $this->valueHolder12a40->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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
        unset($this->incHelper);
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

if (!\class_exists('SubrequestExtension_ac4dffd', false)) {
    \class_alias(__NAMESPACE__.'\\SubrequestExtension_ac4dffd', 'SubrequestExtension_ac4dffd', false);
}
