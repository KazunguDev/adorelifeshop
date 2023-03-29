<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere8c0c = null;
    private $initializeradde4 = null;
    private static $publicPropertiesf9031 = [
        
    ];
    public function getConnection()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getConnection', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getMetadataFactory', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getExpressionBuilder', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'beginTransaction', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getCache', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getCache();
    }
    public function transactional($func)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'transactional', array('func' => $func), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'wrapInTransaction', array('func' => $func), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'commit', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->commit();
    }
    public function rollback()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'rollback', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getClassMetadata', array('className' => $className), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'createQuery', array('dql' => $dql), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'createNamedQuery', array('name' => $name), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'createQueryBuilder', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'flush', array('entity' => $entity), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'clear', array('entityName' => $entityName), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->clear($entityName);
    }
    public function close()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'close', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->close();
    }
    public function persist($entity)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'persist', array('entity' => $entity), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'remove', array('entity' => $entity), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'refresh', array('entity' => $entity), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'detach', array('entity' => $entity), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'merge', array('entity' => $entity), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getRepository', array('entityName' => $entityName), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'contains', array('entity' => $entity), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getEventManager', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getConfiguration', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'isOpen', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getUnitOfWork', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getProxyFactory', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'initializeObject', array('obj' => $obj), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'getFilters', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'isFiltersStateClean', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'hasFilters', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return $this->valueHoldere8c0c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializeradde4 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere8c0c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere8c0c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere8c0c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, '__get', ['name' => $name], $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        if (isset(self::$publicPropertiesf9031[$name])) {
            return $this->valueHoldere8c0c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8c0c;
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
        $targetObject = $this->valueHoldere8c0c;
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
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8c0c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere8c0c;
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
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, '__isset', array('name' => $name), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8c0c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere8c0c;
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
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, '__unset', array('name' => $name), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8c0c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere8c0c;
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
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, '__clone', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        $this->valueHoldere8c0c = clone $this->valueHoldere8c0c;
    }
    public function __sleep()
    {
        $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, '__sleep', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
        return array('valueHoldere8c0c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeradde4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeradde4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializeradde4 && ($this->initializeradde4->__invoke($valueHoldere8c0c, $this, 'initializeProxy', array(), $this->initializeradde4) || 1) && $this->valueHoldere8c0c = $valueHoldere8c0c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere8c0c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere8c0c;
    }
}
