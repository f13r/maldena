<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpKernel\Debug\ErrorHandler;
use Symfony\Component\HttpKernel\Debug\ExceptionHandler;
use Doctrine\Common\Cache\ApcCache;
use Doctrine\Common\Cache\ArrayCache;
use Silex\Provider\DoctrineServiceProvider;
use Symfony\Component\HttpFoundation\Request;


// set the error handling
error_reporting(E_ALL);
error_reporting(-1);
ErrorHandler::register();
if ('cli' !== php_sapi_name()) {
  ExceptionHandler::register();
}

$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views',
)); 

$app->register(new Silex\Provider\DoctrineServiceProvider(), 
	array('db.options' 
		=> array(
			'driver' => 'pdo_mysql', 
			'dbhost' => 'localhost',
	        'dbname' => 'maldena',
	        'user' => 'root',
	        'password' => '',
    ),
));

$app->before(function (Request $request) {
    if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
        $data = json_decode($request->getContent(), true);
        $request->request->replace(is_array($data) ? $data : array());
    }
});

return $app;