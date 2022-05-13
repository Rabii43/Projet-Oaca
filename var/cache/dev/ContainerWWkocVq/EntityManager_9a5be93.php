<?php

namespace ContainerWWkocVq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder36816 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer67577 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties86a05 = [
        
    ];

    public function getConnection()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getConnection', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getMetadataFactory', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getExpressionBuilder', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'beginTransaction', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getCache', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getCache();
    }

    public function transactional($func)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'transactional', array('func' => $func), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'wrapInTransaction', array('func' => $func), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'commit', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->commit();
    }

    public function rollback()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'rollback', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getClassMetadata', array('className' => $className), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'createQuery', array('dql' => $dql), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'createNamedQuery', array('name' => $name), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'createQueryBuilder', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'flush', array('entity' => $entity), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'clear', array('entityName' => $entityName), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->clear($entityName);
    }

    public function close()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'close', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->close();
    }

    public function persist($entity)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'persist', array('entity' => $entity), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'remove', array('entity' => $entity), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'refresh', array('entity' => $entity), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'detach', array('entity' => $entity), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'merge', array('entity' => $entity), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getRepository', array('entityName' => $entityName), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'contains', array('entity' => $entity), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getEventManager', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getConfiguration', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'isOpen', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getUnitOfWork', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getProxyFactory', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'initializeObject', array('obj' => $obj), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'getFilters', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'isFiltersStateClean', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'hasFilters', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return $this->valueHolder36816->hasFilters();
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

        $instance->initializer67577 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder36816) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36816 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder36816->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, '__get', ['name' => $name], $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        if (isset(self::$publicProperties86a05[$name])) {
            return $this->valueHolder36816->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36816;

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

        $targetObject = $this->valueHolder36816;
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
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36816;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36816;
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
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, '__isset', array('name' => $name), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36816;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder36816;
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
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, '__unset', array('name' => $name), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36816;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder36816;
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
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, '__clone', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        $this->valueHolder36816 = clone $this->valueHolder36816;
    }

    public function __sleep()
    {
        $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, '__sleep', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;

        return array('valueHolder36816');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer67577 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer67577;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer67577 && ($this->initializer67577->__invoke($valueHolder36816, $this, 'initializeProxy', array(), $this->initializer67577) || 1) && $this->valueHolder36816 = $valueHolder36816;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36816;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36816;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
