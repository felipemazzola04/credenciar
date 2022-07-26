<?php

namespace ContainerV5kbc4d;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ef58 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4dd7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbabc1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getConnection', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getMetadataFactory', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getExpressionBuilder', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'beginTransaction', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getCache', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'transactional', array('func' => $func), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'commit', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->commit();
    }

    public function rollback()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'rollback', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'createQuery', array('dql' => $dql), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'createQueryBuilder', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'flush', array('entity' => $entity), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'clear', array('entityName' => $entityName), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'close', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->close();
    }

    public function persist($entity)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'persist', array('entity' => $entity), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'remove', array('entity' => $entity), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'refresh', array('entity' => $entity), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'detach', array('entity' => $entity), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'merge', array('entity' => $entity), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'contains', array('entity' => $entity), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getEventManager', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getConfiguration', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'isOpen', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getUnitOfWork', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getProxyFactory', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'getFilters', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'isFiltersStateClean', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'hasFilters', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return $this->valueHolder9ef58->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd4dd7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9ef58) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ef58 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9ef58->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, '__get', ['name' => $name], $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        if (isset(self::$publicPropertiesbabc1[$name])) {
            return $this->valueHolder9ef58->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef58;

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

        $targetObject = $this->valueHolder9ef58;
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
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef58;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ef58;
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
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, '__isset', array('name' => $name), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef58;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ef58;
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
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, '__unset', array('name' => $name), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef58;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ef58;
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
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, '__clone', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        $this->valueHolder9ef58 = clone $this->valueHolder9ef58;
    }

    public function __sleep()
    {
        $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, '__sleep', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;

        return array('valueHolder9ef58');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4dd7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4dd7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4dd7 && ($this->initializerd4dd7->__invoke($valueHolder9ef58, $this, 'initializeProxy', array(), $this->initializerd4dd7) || 1) && $this->valueHolder9ef58 = $valueHolder9ef58;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ef58;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ef58;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
