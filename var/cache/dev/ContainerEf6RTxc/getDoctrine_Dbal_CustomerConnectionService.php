<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.customer_connection' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';
include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';

$a = new \Doctrine\DBAL\Logging\LoggerChain();
$a->addLogger(($this->privates['doctrine.dbal.logger'] ?? $this->load('getDoctrine_Dbal_LoggerService.php')));
$a->addLogger(($this->privates['doctrine.dbal.logger.profiling.customer'] ?? $this->privates['doctrine.dbal.logger.profiling.customer'] = new \Doctrine\DBAL\Logging\DebugStack()));

$b = new \Doctrine\DBAL\Configuration();
$b->setSQLLogger($a);

$c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$c->addEventSubscriber(($this->privates['fos_user.user_listener'] ?? $this->load('getFosUser_UserListenerService.php')));
$c->addEventListener(array(0 => 'loadClassMetadata'), new \Doctrine\ORM\Tools\AttachEntityListenersListener());

return $this->services['doctrine.dbal.customer_connection'] = ($this->privates['doctrine.dbal.connection_factory'] ?? $this->privates['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array()))->createConnection(array('url' => $this->getEnv('DATABASE_CUSTOMER_URL'), 'driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => array(), 'serverVersion' => '5.7', 'defaultTableOptions' => array()), $b, $c, array());