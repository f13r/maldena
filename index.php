<?php

use Silex\Application;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$app = require __DIR__.'/bootstrap.php';
$em = require __DIR__.'/doctrine.php';

$app->get('/', function() use ($app, $em) {
	$contacts = $em->getRepository('Domain\Entity\Contact')->find(1);
	print_r($contacts->getPhone());

//	$phoneForView = "(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data, 6, 2)."-".substr($data, 8, 2);


	return $app['twig']->render('hi.twig');
});
$app->post('/feedback', function(Request $request) use ($app, $em) {

	function findParams($feedback) {
		$param = new stdClass();
		if (array_key_exists('phone', $feedback)) {
			$param->name = 'phone';
			$param->value = $feedback['phone'];
			$param->methodName = 'setPhone';
		}
		if (array_key_exists('email', $feedback)) {
			$param->name = 'email';
			$param->value = $feedback['email'];
			$param->methodName = 'setEmail';
		}
		return $param;
	}

	$feedback = $request->request->get('feedback');
	$param = findParams($feedback);

	$user = $em->getRepository('Domain\Entity\User')
				->findOneBy(array($param->name => $param->value));

	if (empty($user)) {
		$methodName = $param->methodName;
		$user = new Domain\Entity\User(); 
		$user->setName($feedback['name']);
		$user->setCreatedAt();
		$user->$methodName($param->value);
	}

	$feedbacks = new Domain\Entity\Feedbacks();
	$feedbacks->setText($feedback['text']);
	$feedbacks->setUser($user);
	$feedbacks->setCreatedAt();

	$user->getFeedback()->add($feedbacks);

	$em->persist($user);
	$em->flush();
	return true;
});
$app->run();
