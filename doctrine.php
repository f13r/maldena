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
        'dbhost' => 'localhost',
        'dbname' => 'maldena_db',
        'user' => 'maldena_db',
        'password' => 'gtnhjdbx'
);

return EntityManager::create($connectionOptions, $config);


