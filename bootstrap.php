<?php
require_once __DIR__.'/vendor/autoload.php';

use Doctrine\Common\Cache\MemcachedCache;
use Services\User;
use Symfony\Component\HttpKernel\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;
use CRM\Sugar;
use Symfony\Component\Translation\Loader\YamlFileLoader;


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

$app->register(new Silex\Provider\HttpFragmentServiceProvider());


$app->register(new Silex\Provider\TranslationServiceProvider(), array(
	'locale_fallback' => 'ru'
));
$app->register(new Silex\Provider\ValidatorServiceProvider());
//$app['locale'] = 'ru';

$app['translator'] = $app->share($app->extend('translator', function($translator, $app) {
	$translator->addLoader('yaml', new YamlFileLoader());
	$translator->addResource('yaml', __DIR__.'/src/Locales/ru.yml', 'ru');
	$translator->addResource('yaml', __DIR__.'/src/Locales/validators.ru.yml', 'ru', 'validators');
	return $translator;
}));

$app->before(function (Request $request) {
    if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
        $data = json_decode($request->getContent(), true);
        $request->request->replace(is_array($data) ? $data : array());
    }
});

$app['crm'] = $app->share(function() use ($app) {
	return new Sugar();
});

$app['em'] = $app->share(function() {
	return require __DIR__.'/doctrine.php';
});

$app['userServices'] = $app->share(function() use ($app) {
	return new User($app);
});

$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->boot();
return $app;