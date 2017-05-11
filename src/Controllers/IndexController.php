<?php
namespace Controllers;

use Common\Notifier\DemoNotifier;
use Common\Notifier\TestNotifier;
use Common\Notify\FeedbackNotifier;
use Domain\Entity\Contact;
use Domain\Entity\Teacher;
use Domain\Entity\User;
use Domain\Entity\Feedback;
use Silex\Application;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationList;

class IndexController extends AbstractController {

	const SCHOOL_MAIN = 1;


	private function fetchSchoolDataById($id) {

		/**
		 * @var Contact $contact
		 */
		$contact = $this->em->getRepository('Domain\Entity\Contact')->find($id);
		$schoolData = $contact->getSchoolContacts();

		$schoolData['prices'] = $this->em->getRepository('Domain\Entity\Price')->getPricesByContactId($id);

		return $schoolData;
	}

	protected function actionsHandler() {

		$this->viewAssigns($this->fetchSchoolDataById(self::SCHOOL_MAIN));

		$this->controller->get('/', function() {
			$this->setTemplate('templates/main.twig');
			return $this->render();
		})->bind('main');


		$this->controller->post('/feedback', function() {

			$userResponse = $this->app['request']->request->get('feedback');

			$constraint = [
				'name' => new Assert\NotBlank(),
				'text' => new Assert\NotBlank()
			];

			if (isset($userResponse['email'])) {
				$constraint['email'] = new Assert\Email();
			}

			if (isset($userResponse['phone'])) {
				$constraint['phone'] = new Assert\Length(10);
			}
			/**
			 * @var ConstraintViolationList $errors
			 */
			$errors = $this->validator->validate($userResponse, new Assert\Collection($constraint));

			if ($errors->count() > 0) {

				$errorMessages = [];
				/**
				 * @var ConstraintViolation $error
				 */
				foreach($errors as $error) {
					$errorMessages[] = $error->getMessage();
				}

				return $this->app->json(['messages' => $errorMessages, 'error' => 1], 200);
			}

			/**
			 * @var User $user
			 */
			$user = $this->em->getRepository('Domain\Entity\User')->getUserByEmailOrPhone($userResponse);
			if (is_null($user)) {
				$user = $this->app['userServices']->createUser($userResponse);
			}

			$userResponse['crmId'] = $user->getUserCrmId();

			$crmUserId = $this->app['crm']->updateContact($userResponse);
			$user->setUserCrmId($crmUserId);

			$feedback = new Feedback();
			$feedback->setText($userResponse['text']);
			$feedback->setUser($user);

			$this->em->persist($feedback);
			$this->em->flush();

			$manager = $this->app['notifierManager'];
			$manager->addTask(FeedbackNotifier::class, $feedback);

			return true;
		});

		$this->controller->get('/login', function() {
			$this->setTemplate('templates/admin/login.twig');
			$this->viewAssigns([
				'error'         => $this->app['security.last_error']($this->app['request']),
				'last_username' => $this->app['session']->get('_security.last_username'),
			]);

			return $this->render();
		});

		$this->controller->get('/teachers', function() {

			$teachers = $this->em->getRepository('\Domain\Entity\Teacher')->findAll();

			$this->viewAssigns(compact('teachers'));
			$this->setTemplate('templates/teachers.twig');

			return $this->render();

		})->bind('teachers');

		$this->controller->get('/teachers/{teacher}', function($teacher) {

			if (empty($teacher) || $teacher == '') {
				return $this->app->redirect('/teachers');
			}

			$teacher = $this->em->getRepository('\Domain\Entity\Teacher')->findOneByPageName($teacher);

			if (!is_a($teacher, Teacher::class)) {
				return $this->app->redirect('/teachers');
			}

			$this->viewAssigns(['teachers' => [ $teacher ]]);
			$this->setTemplate('templates/teachers.twig');

			return $this->render();
		});

		$this->controller->post('/congratulations', function() {

			$userResponse = $this->app['request']->request->all();

			$constraint = [
				'name' => new Assert\NotBlank(),
				'phone' => [new Assert\Length(10), new Assert\NotBlank()],
				'goals' => new Assert\Optional()
			];

			/**
			 * @var ConstraintViolationList $errors
			 */
			$errors = $this->validator->validate($userResponse['user'], new Assert\Collection($constraint));

			if ($errors->count() > 0) {
				$this->session->getFlashBag()->add('wrongEnglishTestForm', true);
				$this->session->set('/test/answer', $userResponse['answer']);
				$this->session->set('/test/user', $userResponse['user']);
				return $this->app->redirect($this->app['url_generator']->generate('test'));
			}

			/**
			 * @var User $user
			 */
			$user = $this->em->getRepository('Domain\Entity\User')->findOneByPhone($userResponse['user']['phone']);
			if (is_null($user)) {
				$user = $this->app['userServices']->createUser($userResponse['user']);
			}
			$test = $this->app['userServices']->createTest($userResponse, $user);

			$this->em->persist($test);
			$this->em->flush();


			$manager = $this->app['notifierManager'];
			$manager->addTask(TestNotifier::class, $test);

			$this->setTemplate('templates/saveTest.twig');
			$this->viewAssigns(['name' => $userResponse['user']['name']]);
			return $this->render();

		})->bind('saveTest');

		$this->controller->get('/test', function() {

			$answer = $user = [];

			if ($this->session->get('/test/answer') != '') {
				$answer = $this->session->get('/test/answer');
				$this->session->remove('/test/answer');
			}

			if ($this->session->get('/test/user') != '') {
				$user = $this->session->get('/test/user');
				$this->session->remove('/test/user');
			}

			$this->setTemplate('templates/englishTest.twig');
			$this->viewAssigns(['answer' => $answer, 'user' => $user]);

			return $this->render();

		})->bind('test');

		// Free lesson
		$this->controller->get('/demo', function() {

			$user = [];
			if ($this->session->get('/demo/user') != '') {
				$user = $this->session->get('/demo/user');
				$this->session->remove('/demo/user');
			}

			$this->setTemplate('templates/demo.twig');
			$this->viewAssigns(['user' => $user]);
			return $this->render();

		})->bind('demo');

		$this->controller->post('/thanks', function() {

			$userResponse = $this->app['request']->request->get('user');
			$constraint = [
				'name' => new Assert\NotBlank(),
			    'phone' => [new Assert\Length(10), new Assert\NotBlank()]
			];

			/**
			 * @var ConstraintViolationList $errors
			 */
			$errors = $this->validator->validate($userResponse, new Assert\Collection($constraint));

			if ($errors->count() > 0) {
				$this->session->getFlashBag()->add('wrongDemoForm', true);
				$this->session->set('/demo/user', $userResponse);
				return $this->app->redirect($this->app['url_generator']->generate('demo'));
			}

			/**
			 * @var User $user
			 */
			$user = $this->em->getRepository('Domain\Entity\User')->findOneByPhone($userResponse['phone']);
			if (is_null($user)) {
				$user = $this->app['userServices']->createUser($userResponse);
			}

			$demo = $this->app['userServices']->createDemo($user);

			$this->em->persist($demo);
			$this->em->flush();

			$manager = $this->app['notifierManager'];
			$manager->addTask(DemoNotifier::class, $demo);

			$this->setTemplate('templates/saveDemo.twig');
			$this->viewAssigns(['user' => $user]);
			return $this->render();

		})->bind('saveDemo');

		$this->controller->get('/services', function() {
			$this->setTemplate('templates/englishTest.twig');
			return $this->render();
		})->bind('services');

		$this->controller->get('/contacts', function() {
			$this->setTemplate('templates/contacts.twig');
			return $this->render();
		})->bind('contacts');


		$this->controller->get('/group', function() {
			$this->setTemplate('templates/group.twig');
			return $this->render();
		})->bind('group');

		$this->controller->get('/individually', function() {
			$this->setTemplate('templates/individually.twig');
			return $this->render();
		})->bind('individually');

		$this->controller->get('/tests', function() {
			$this->setTemplate('templates/tests.twig');
			return $this->render();
		})->bind('tests');

		$this->controller->get('/it', function() {
			$this->setTemplate('templates/it.twig');
			return $this->render();
		})->bind('it');

		$this->controller->get('/zno', function() {
			$this->setTemplate('templates/zno.twig');
			return $this->render();
		})->bind('zno');

		$this->controller->get('/business', function() {
			$this->setTemplate('templates/business.twig');
			return $this->render();
		})->bind('business');

		$this->controller->get('/speaker', function() {
			$this->setTemplate('templates/speaker.twig');
			return $this->render();
		})->bind('speaker');


		return $this->controller;

	}

}