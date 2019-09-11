<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd0944 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc2013 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties61ecd = [
        
    ];

    public function getConnection()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getConnection', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getMetadataFactory', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getExpressionBuilder', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'beginTransaction', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getCache', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'transactional', array('func' => $func), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->transactional($func);
    }

    public function commit()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'commit', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->commit();
    }

    public function rollback()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'rollback', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getClassMetadata', array('className' => $className), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'createQuery', array('dql' => $dql), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'createNamedQuery', array('name' => $name), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'createQueryBuilder', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'flush', array('entity' => $entity), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'clear', array('entityName' => $entityName), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->clear($entityName);
    }

    public function close()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'close', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->close();
    }

    public function persist($entity)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'persist', array('entity' => $entity), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'remove', array('entity' => $entity), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'refresh', array('entity' => $entity), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'detach', array('entity' => $entity), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'merge', array('entity' => $entity), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'contains', array('entity' => $entity), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getEventManager', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getConfiguration', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'isOpen', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getUnitOfWork', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getProxyFactory', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'initializeObject', array('obj' => $obj), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'getFilters', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'isFiltersStateClean', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'hasFilters', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return $this->valueHolderd0944->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc2013 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd0944) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd0944 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd0944->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, '__get', ['name' => $name], $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        if (isset(self::$publicProperties61ecd[$name])) {
            return $this->valueHolderd0944->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0944;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderd0944;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0944;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd0944;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, '__isset', array('name' => $name), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0944;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd0944;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, '__unset', array('name' => $name), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0944;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd0944;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, '__clone', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        $this->valueHolderd0944 = clone $this->valueHolderd0944;
    }

    public function __sleep()
    {
        $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, '__sleep', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;

        return array('valueHolderd0944');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerc2013 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializerc2013;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc2013 && ($this->initializerc2013->__invoke($valueHolderd0944, $this, 'initializeProxy', array(), $this->initializerc2013) || 1) && $this->valueHolderd0944 = $valueHolderd0944;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd0944;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderd0944;
    }


}
