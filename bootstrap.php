<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpKernel\Debug\ExceptionHandler;
use Doctrine\Common\Cache\ApcCache;
use Doctrine\Common\Cache\ArrayCache;
use Silex\Provider\DoctrineServiceProvider;
use Symfony\Component\HttpFoundation\Request;


// set the error handling
error_reporting(E_ALL);
error_reporting(-1);

$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views',
	'twig.options'    => array(
		'cache' => __DIR__ . '/views/cache',
	)
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

$app->register(new Silex\Provider\SecurityServiceProvider(), array(
	'security.firewalls' => array(
		'admin' => array(
			'pattern' => '^/admin',
			'form' => array('login_path' => '/login', 'check_path' => '/admin/login_check'),
			'logout' => array('logout_path' => '/admin/logout', 'invalidate_session' => true),
			'users' => array(
				'admin' => array('ROLE_ADMIN', 'y26HBR2g4R5KPIKP3UDL3ctIgREZYAVhnRXND3pcVmmmcaDVOeavhCZn1McgsxfXeljmCu3X5Ww9A9BbkKnPNw=='),
			)
		)
	)
));
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

return $app;