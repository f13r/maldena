<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Configuration;

$cache = new \Doctrine\Common\Cache\ArrayCache;

$config = new Configuration;
$config->setMetadataCacheImpl($cache);
$driverImpl = $config->newDefaultAnnotationDriver(__DIR__ . "/src/Domain/Entity");
$config->setMetadataDriverImpl($driverImpl);
$config->setQueryCacheImpl($cache);
$config->setProxyDir('/tmp');
$config->setProxyNamespace('DoctrineProxy');

$config->setAutoGenerateProxyClasses(true);

$connectionOptions = array(
     'driver' => 'pdo_mysql', 
        'host' => 'maldena.mysql.ukraine.com.ua',
        'dbname' => 'maldena_test',
        'user' => 'maldena_test',
        'password' => 'lz24723t',
		'charset' => 'utf8',
		'driverOptions' => array(
			1002=>'SET NAMES utf8'
		)
);

return EntityManager::create($connectionOptions, $config);
