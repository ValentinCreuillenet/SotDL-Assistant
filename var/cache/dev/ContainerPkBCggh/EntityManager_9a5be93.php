<?php

namespace ContainerPkBCggh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder820fb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1e82f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1fea3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getConnection', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getMetadataFactory', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getExpressionBuilder', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'beginTransaction', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getCache', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'transactional', array('func' => $func), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->transactional($func);
    }

    public function commit()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'commit', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->commit();
    }

    public function rollback()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'rollback', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getClassMetadata', array('className' => $className), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'createQuery', array('dql' => $dql), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'createNamedQuery', array('name' => $name), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'createQueryBuilder', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'flush', array('entity' => $entity), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'clear', array('entityName' => $entityName), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->clear($entityName);
    }

    public function close()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'close', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->close();
    }

    public function persist($entity)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'persist', array('entity' => $entity), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'remove', array('entity' => $entity), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'refresh', array('entity' => $entity), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'detach', array('entity' => $entity), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'merge', array('entity' => $entity), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'contains', array('entity' => $entity), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getEventManager', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getConfiguration', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'isOpen', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getUnitOfWork', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getProxyFactory', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'initializeObject', array('obj' => $obj), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'getFilters', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'isFiltersStateClean', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'hasFilters', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return $this->valueHolder820fb->hasFilters();
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

        $instance->initializer1e82f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder820fb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder820fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder820fb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, '__get', ['name' => $name], $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        if (isset(self::$publicProperties1fea3[$name])) {
            return $this->valueHolder820fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder820fb;

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

        $targetObject = $this->valueHolder820fb;
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
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder820fb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder820fb;
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
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, '__isset', array('name' => $name), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder820fb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder820fb;
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
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, '__unset', array('name' => $name), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder820fb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder820fb;
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
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, '__clone', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        $this->valueHolder820fb = clone $this->valueHolder820fb;
    }

    public function __sleep()
    {
        $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, '__sleep', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;

        return array('valueHolder820fb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1e82f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1e82f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1e82f && ($this->initializer1e82f->__invoke($valueHolder820fb, $this, 'initializeProxy', array(), $this->initializer1e82f) || 1) && $this->valueHolder820fb = $valueHolder820fb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder820fb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder820fb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
