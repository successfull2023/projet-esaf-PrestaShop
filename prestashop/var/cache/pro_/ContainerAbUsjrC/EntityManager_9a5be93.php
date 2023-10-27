<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7c64b = null;
    private $initializerc5ee8 = null;
    private static $publicProperties0d959 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getConnection', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getMetadataFactory', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getExpressionBuilder', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'beginTransaction', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getCache', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'transactional', array('func' => $func), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'commit', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->commit();
    }
    public function rollback()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'rollback', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getClassMetadata', array('className' => $className), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'createQuery', array('dql' => $dql), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'createNamedQuery', array('name' => $name), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'createQueryBuilder', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'flush', array('entity' => $entity), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'clear', array('entityName' => $entityName), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->clear($entityName);
    }
    public function close()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'close', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->close();
    }
    public function persist($entity)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'persist', array('entity' => $entity), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'remove', array('entity' => $entity), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'refresh', array('entity' => $entity), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'detach', array('entity' => $entity), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'merge', array('entity' => $entity), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'contains', array('entity' => $entity), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getEventManager', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getConfiguration', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'isOpen', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getUnitOfWork', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getProxyFactory', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'initializeObject', array('obj' => $obj), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'getFilters', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'isFiltersStateClean', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'hasFilters', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return $this->valueHolder7c64b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc5ee8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder7c64b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7c64b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7c64b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, '__get', ['name' => $name], $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        if (isset(self::$publicProperties0d959[$name])) {
            return $this->valueHolder7c64b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c64b;
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
        $targetObject = $this->valueHolder7c64b;
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
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c64b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7c64b;
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
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, '__isset', array('name' => $name), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c64b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7c64b;
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
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, '__unset', array('name' => $name), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c64b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7c64b;
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
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, '__clone', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        $this->valueHolder7c64b = clone $this->valueHolder7c64b;
    }
    public function __sleep()
    {
        $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, '__sleep', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
        return array('valueHolder7c64b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc5ee8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc5ee8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc5ee8 && ($this->initializerc5ee8->__invoke($valueHolder7c64b, $this, 'initializeProxy', array(), $this->initializerc5ee8) || 1) && $this->valueHolder7c64b = $valueHolder7c64b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7c64b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7c64b;
    }
}
