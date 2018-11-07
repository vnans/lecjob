<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.customer_entity_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';

$a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), array(0 => ($this->targetDirs[3].'/src/Entity/Customer'))), 'App\\Entity\\Customer');

$b = new \Doctrine\ORM\Configuration();
$b->setEntityNamespaces(array('Customer' => 'App\\Entity\\Customer'));
$b->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.customer_metadata_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_CustomerMetadataCacheService.php')));
$b->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.customer_query_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_CustomerQueryCacheService.php')));
$b->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.customer_result_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_CustomerResultCacheService.php')));
$b->setMetadataDriverImpl($a);
$b->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$b->setProxyNamespace('Proxies');
$b->setAutoGenerateProxyClasses(false);
$b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$b->setNamingStrategy(($this->privates['doctrine.orm.naming_strategy.default'] ?? $this->privates['doctrine.orm.naming_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultNamingStrategy()));
$b->setQuoteStrategy(($this->privates['doctrine.orm.quote_strategy.default'] ?? $this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy()));
$b->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
$b->setRepositoryFactory(($this->privates['doctrine.orm.container_repository_factory'] ?? $this->load('getDoctrine_Orm_ContainerRepositoryFactoryService.php')));

$this->services['doctrine.orm.customer_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.customer_connection'] ?? $this->load('getDoctrine_Dbal_CustomerConnectionService.php')), $b);

(new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array()))->configure($instance);

return $instance;
