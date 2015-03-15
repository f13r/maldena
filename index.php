<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => dirname(__DIR__) .'/views',
));
$app->get('/', function($name) use ($app) {
	return $app['twig']->render('hi.twig');
});
$app->run();
