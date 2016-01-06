<?php

use Silex\Application;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$app = require __DIR__.'/bootstrap.php';
/**
 * @var Doctrine\ORM\EntityManager $em
 */
$em = require __DIR__.'/doctrine.php';

$contact = $em->getRepository('Domain\Entity\Contact')->find(1);
$phone = $contact->getPhone();
$phone2 = $contact->getPhone2();

$templateVariables = array(
	'phone' => "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone, 6, 2)."-".substr($phone, 8, 2),
	'phone2' => "(".substr($phone2, 0, 3).") ".substr($phone2, 3, 3)."-".substr($phone2, 6, 2)."-".substr($phone2, 8, 2),
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
})->bind('main');

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
	return $app['twig']->render('templates/admin/login.twig', array(
		'error'         => $app['security.last_error']($request),
		'last_username' => $app['session']->get('_security.last_username'),
	));
});

$app->get('/admin/user_test/{answerId}', function(Request $request, $answerId) use ($app, $render, $em) {

	$answer = [];
	$aboutUser = [];

	/**
	 * @var Domain\Entity\Answer $answerObj
	 */
	$answerObj = $em->getRepository('Domain\Entity\Answer')
		->findOneBy(array('id' => (int) $answerId));

	$answer = unserialize($answerObj->getAnswer());
	/**
	 * @var Domain\Entity\User $userObj
	 */
	$userObj = $answerObj->getUser();

	$aboutUser['goals'] = $answerObj->getGoals();
	$aboutUser['date'] = $answerObj->getCreatedAt()->format('F j, H:m');
	$aboutUser['name'] = $userObj->getName();
	$aboutUser['status'] = $answerObj->getStatus();
	$aboutUser['result'] = $answerObj->getResult();
	$aboutUser['answerId'] = $answerObj->getId();

	return $app['twig']->render('templates/admin/testResult.twig', ['answer' => $answer, 'aboutUser' => $aboutUser]);

})->bind('viewUserTest');

$app->get('/admin', function(Request $request) use ($app, $render, $em) {

	$answers = [];

	$qb = $em->createQueryBuilder();
	$qb->select('u')
		->from('Domain\Entity\User', 'u')
		->where('u.id > ?1')
		->setParameter(1, 32);

	$query = $qb->getQuery();
	/**
	 * @var Domain\Entity\User $user
	 */
	$users = $query->execute();

	foreach ($users as $user) {
		$id = $user->getId();
		$answers[$id]['name'] = $user->getName();
		if ($user->getPhone() == '') {
			$answers[$id]['contact'] = $user->getEmail();
		} else {
			$answers[$id]['contact'] = $user->getPhone();
		}
		/**
		 * @var Domain\Entity\Answer $testResult
		 */
		$testResult = $user->getAnswer()->first();
		$answers[$id]['goals'] = $testResult->getGoals();
		$answers[$id]['date'] = $testResult->getCreatedAt()->format('F j, H:m');
		$answers[$id]['link'] = $app['url_generator']->generate('viewUserTest', array('answerId' => $testResult->getId()));
		$answers[$id]['status'] = $testResult->getStatus();
		$answers[$id]['result'] = $testResult->getTextResult();
	}

	$change = $request->query->get('change') ?: '';

	return $app['twig']->render('templates/admin/users.twig', ['answers' => $answers, 'change' => $change]);
})->bind('/admin/users');


$app->post('/admin/user_test/save', function(Request $request) use ($app, $render, $em) {

	$result = $request->request->get('result');
	$answerId = $request->request->get('answerId');

	/**
	 * @var Domain\Entity\Answer $answerObj
	 */
	$answerObj = $em->getRepository('Domain\Entity\Answer')
		->findOneBy(array('id' => (int) $answerId));
	$answerObj->setResult($result);

	if ($result == 0) {
		$answerObj->setStatus(0);
	} else {
		$answerObj->setStatus(1);
	}

	$em->persist($answerObj);
	$em->flush();

	return $app->redirect($app['url_generator']->generate('/admin/users') . '?change=1');

})->bind('/admin/userTest/save');

$app->post('/congratulations', function(Request $request) use ($app, $render, $em) {

	$answer = $request->request->get('answer');
	$name = trim($request->request->get('name'));
	$contact = trim($request->request->get('contact'));
	$goals = trim($request->request->get('goals'));

	if (empty($name) or (empty($contact))) {
		$response = '/test?error=1&name=' . $name . '&contact=' . $contact;
		foreach ($answer as $value) {

		}
		return $app->redirect('/test?error=1&name=' . $name . '&contact=' . $contact);
	}

	// try to find by phone or email

	$qb = $em->createQueryBuilder();
	$qb->select('u')
		->from('Domain\Entity\User', 'u')
		->where('u.phone = ?1')
		->orWhere('u.email = ?1')
		->setMaxResults(1)
		->setParameter(1, $contact);

	$query = $qb->getQuery();
	/**
	 * @var Domain\Entity\User $user
	 */
	$user = $query->getOneOrNullResult();


	if (empty($user)) {
		$user = new Domain\Entity\User();
		$user->setName($name);
		$user->setCreatedAt();
		if (filter_var($contact, FILTER_VALIDATE_EMAIL)) {
			$user->setEmail($contact);
		} else {
			$user->setPhone($contact);
		}
	}

	$answerObj = new Domain\Entity\Answer();
	$answerObj->setCreatedAt();
	$answerObj->setUser($user);
	$answerObj->setAnswer(serialize($answer));
	$answerObj->setGoals($goals);

	$user->getAnswer()->add($answerObj);

	$em->persist($user);
	$em->flush();

	return $render('templates/saveTest.twig', array(
			'name' => $name
	));
})->bind('saveTest');

$app->get('/test', function(Request $request) use ($app, $render) {

	$answer = $request->query->get('answer') ?: [];
	$user = $request->query->get('user') ?: [];

	return $render('templates/englishTest.twig', ['answer' => $answer, 'user' => $user]);
})->bind('test');

$app->get('/services', function(Request $request) use ($app, $render) {
	return $render('templates/services.twig');
})->bind('services');

$app->get('/contacts', function(Request $request) use ($app, $render) {
	return $render('templates/contacts.twig');
})->bind('contacts');


$app->get('/group', function(Request $request) use ($app, $render) {
	return $render('templates/group.twig');
})->bind('group');

$app->get('/individually', function(Request $request) use ($app, $render) {
	return $render('templates/individually.twig');
})->bind('individually');

$app->get('/tests', function(Request $request) use ($app, $render) {
	return $render('templates/tests.twig');
})->bind('tests');

$app->get('/zno', function(Request $request) use ($app, $render) {
	return $render('templates/zno.twig');
})->bind('zno');

$app->get('/business', function(Request $request) use ($app, $render) {
	return $render('templates/business.twig');
})->bind('business');

$app->get('/speaker', function(Request $request) use ($app, $render) {
	return $render('templates/speaker.twig');
})->bind('speaker');

$app->run();
