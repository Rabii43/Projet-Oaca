<?php

namespace ContainerTUPJagG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder78804 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3d06e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesea6cd = [
        
    ];

    public function getConnection()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getConnection', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getMetadataFactory', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getExpressionBuilder', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'beginTransaction', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getCache', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'transactional', array('func' => $func), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'commit', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->commit();
    }

    public function rollback()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'rollback', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getClassMetadata', array('className' => $className), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'createQuery', array('dql' => $dql), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'createNamedQuery', array('name' => $name), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'createQueryBuilder', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'flush', array('entity' => $entity), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'clear', array('entityName' => $entityName), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->clear($entityName);
    }

    public function close()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'close', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->close();
    }

    public function persist($entity)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'persist', array('entity' => $entity), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'remove', array('entity' => $entity), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'refresh', array('entity' => $entity), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'detach', array('entity' => $entity), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'merge', array('entity' => $entity), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'contains', array('entity' => $entity), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getEventManager', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getConfiguration', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'isOpen', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getUnitOfWork', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getProxyFactory', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'initializeObject', array('obj' => $obj), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'getFilters', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'isFiltersStateClean', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'hasFilters', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return $this->valueHolder78804->hasFilters();
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

        $instance->initializer3d06e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder78804) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder78804 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder78804->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, '__get', ['name' => $name], $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        if (isset(self::$publicPropertiesea6cd[$name])) {
            return $this->valueHolder78804->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78804;

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

        $targetObject = $this->valueHolder78804;
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
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78804;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder78804;
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
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, '__isset', array('name' => $name), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78804;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder78804;
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
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, '__unset', array('name' => $name), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78804;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder78804;
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
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, '__clone', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        $this->valueHolder78804 = clone $this->valueHolder78804;
    }

    public function __sleep()
    {
        $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, '__sleep', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;

        return array('valueHolder78804');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3d06e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3d06e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3d06e && ($this->initializer3d06e->__invoke($valueHolder78804, $this, 'initializeProxy', array(), $this->initializer3d06e) || 1) && $this->valueHolder78804 = $valueHolder78804;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder78804;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder78804;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
