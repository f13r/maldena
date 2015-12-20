<?php

use Silex\Application;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$app = require __DIR__.'/bootstrap.php';
$em = require __DIR__.'/doctrine.php';

$contact = $em->getRepository('Domain\Entity\Contact')->find(1);
$phone = $contact->getPhone();

$templateVariables = array(
	'phone' => "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone, 6, 2)."-".substr($phone, 8, 2),
	'city' => $contact->getCity(),
	'address' => $contact->getAddress(),
	'email' => $contact->getEmail(),
	'skype' => $contact->getSkype()
);

$render = function($template, $variables = []) use ($app, $templateVariables) {
	$variables = array_merge($variables, $templateVariables);
	return $app['twig']->render($template, $variables);
};

$app->get('/', function() use ($app, $em, $render) {
	return $render('templates/main.twig');
});

$app->get('/test', function() use ($app, $render) {
	return $render('templates/englishTest.twig');
});

$app->post('/feedback', function(Request $request) use ($app, $em) {

	function findParams($feedback) {
		$param = new stdClass();
		if (array_key_exists('phone', $feedback)) {
			$param->name = 'phone';
			if (!$feedback['phone']) {
				$feedback['phone'] = '';
			}
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

	/**
	 * @var Domain\Entity\User $user
	 */
	$user = $em->getRepository('Domain\Entity\User')
				->findOneBy(array($param->name => $param->value));

	if (empty($user)) {
		$methodName = $param->methodName;
		$user = new Domain\Entity\User(); 
		$user->setName($feedback['name']);
		$user->setCreatedAt();
		$user->$methodName($param->value);
	} else {
		$feedback['crmId'] = $user->getCrmId();
	}

	$crm = new CRM\Sugar();
	$crmUserId = $crm->updateContact($feedback);

	$feedbacks = new Domain\Entity\Feedback();
	$feedbacks->setText($feedback['text']);
	$feedbacks->setUser($user);
	$feedbacks->setCreatedAt();

	$user->setCrmId($crmUserId);
	$user->getFeedback()->add($feedbacks);

	$em->persist($user);
	$em->flush();


	return true;
});

$app->get('/login', function(Request $request) use ($app, $render) {
	return $app['twig']->render('templates/login.twig', array(
		'error'         => $app['security.last_error']($request),
		'last_username' => $app['session']->get('_security.last_username'),
	));
});

$app->get('/admin', function(Request $request) use ($app, $render) {
	return $app['twig']->render('templates/admin.twig', array());
});

$app->post('/congratulations', function(Request $request) use ($app, $render) {
	$answer = $request->request->get('feedback');
	return $render('templates/saveTest.twig', array(
			'answer' => $answer
	));
})->bind('saveTest');

$app->run();
