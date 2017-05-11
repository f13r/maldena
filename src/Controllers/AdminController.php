<?php
namespace Controllers;

use Domain\Entity\Activity;
use Domain\Entity\Demo;
use Domain\Entity\Event;
use Domain\Entity\Teacher;
use Domain\Entity\Test;
use Domain\Entity\User;
use Domain\Repository\DemoRepository;
use Domain\Repository\FeedbackRepository;
use Domain\Repository\TestRepository;
use Silex\Application;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Validator\Constraints\DateTime;

class AdminController extends AbstractController {

	protected function actionsHandler() {


		$this->controller->get('/', function() {
			return $this->app->redirect($this->app['url_generator']->generate('/admin/user/test'));
		});

		$this->controller->get('/user/test/page/{page}', function($page = 1) {

			$paginator = $this->em->getRepository('\Domain\Entity\Test')->getAllPaginatedPosts($page);

			$this->setTemplate('templates/admin/user/test.twig');
			$this->viewAssigns([
				'tests' => $paginator,
				'maxPages' => ceil($paginator->count() / TestRepository::SHOW_ROWS_IN_LIST),
				'thisPage' => $page
			]);
			return $this->render();

		})->bind('/admin/user/test')->value('page', 1);

		$this->controller->get('/user/test/{testId}', function($testId) {

			$answer = $this->em->getRepository('Domain\Entity\Test')
				->findOneBy(array('id' => (int) $testId));

			$this->setTemplate('templates/admin/user/testResult.twig');
			$this->viewAssigns(['answer' => $answer]);
			return $this->render();

		})->bind('/admin/user/test/result');

		$this->controller->post('/user/test/save', function() {

			$level = $this->app['request']->request->get('level');
			$answerId = $this->app['request']->request->get('answerId');
			$comment = $this->app['request']->request->get('comment');

			/**
			 * @var Test $test
			 */
			$test = $this->em->getRepository('Domain\Entity\Test')
				->findOneBy(array('id' => (int) $answerId));

			if ($comment != '') {
				$test->setComment($comment);
			}

			if ($level != 0) {
				$test->setStatus(Activity::STATUS_ACTIVE);
				$test->setLevel($level);
			}


			$this->em->persist($test);
			$this->em->flush();

			$this->session->getFlashBag()->add('testListChangeSuccessful', true);

			return $this->app->redirect($this->app['url_generator']->generate('/admin/user/test'));

		})->bind('/admin/user/test/save');

		$this->controller->get('/user/demo/page/{page}', function($page) {

			$paginator = $this->em->getRepository('\Domain\Entity\Demo')->getAllPaginatedPosts($page);

			$this->setTemplate('templates/admin/user/demo.twig');
			$this->viewAssigns([
				'demos' => $paginator,
				'maxPages' => ceil($paginator->count() / DemoRepository::SHOW_ROWS_IN_LIST),
				'thisPage' => $page
			]);
			return $this->render();

		})->bind('/admin/user/demo')->value('page', 1);

		$this->controller->get('/user/demo/{demoId}', function($demoId) {

			$demo = $this->em->getRepository('Domain\Entity\Demo')
				->findOneBy(array('id' => (int) $demoId));

			$this->setTemplate('templates/admin/user/demoResult.twig');
			$this->viewAssigns(['demo' => $demo]);
			return $this->render();

		})->bind('/admin/user/demo/result');

		$this->controller->post('/user/demo/save', function() {

			$status = $this->app['request']->request->get('status');
			$demoId = $this->app['request']->request->get('demoId');
			$comment = $this->app['request']->request->get('comment');

			/**
			 * @var Demo $demoObj
			 */
			$demo = $this->em->getRepository('Domain\Entity\Demo')
				->findOneBy(array('id' => (int) $demoId));

			$demo->setStatus($status);
			$demo->setComment($comment);

			$this->em->persist($demo);
			$this->em->flush();

			$this->session->getFlashBag()->add('demoListChangeSuccessful', true);

			return $this->app->redirect($this->app['url_generator']->generate('/admin/user/demo'));

		})->bind('/admin/user/demo/save');

		$this->controller->get('/user/feedback/page/{page}', function($page) {

			$paginator = $this->em->getRepository('\Domain\Entity\Feedback')->getAllPaginatedPosts($page);

			$this->setTemplate('templates/admin/user/feedback.twig');
			$this->viewAssigns([
				'feedbacks' => $paginator,
				'maxPages' => ceil($paginator->count() / FeedbackRepository::SHOW_ROWS_IN_LIST),
				'thisPage' => $page
			]);
			return $this->render();

		})->bind('/admin/user/feedback')->value('page', 1);

		$this->controller->get('/user/feedback/{feedback}', function($feedback) {

			$feedback = $this->em->getRepository('Domain\Entity\Feedback')
				->findOneBy(array('id' => (int) $feedback));

			$this->setTemplate('templates/admin/user/feedbackResult.twig');
			$this->viewAssigns(['feedback' => $feedback]);
			return $this->render();

		})->bind('/admin/user/feedback/result');

		$this->controller->post('/user/feedback/save', function() {

			$feedbackId = $this->app['request']->request->get('feedbackId');
			$comment = $this->app['request']->request->get('comment');

			/**
			 * @var Test $test
			 */
			$test = $this->em->getRepository('Domain\Entity\Feedback')
				->findOneBy(array('id' => (int) $feedbackId));

			if ($comment != '') {
				$test->setStatus(Activity::STATUS_ACTIVE);
				$test->setComment($comment);
			}

			$this->em->persist($test);
			$this->em->flush();

			$this->session->getFlashBag()->add('feedbackListChangeSuccessful', true);

			return $this->app->redirect($this->app['url_generator']->generate('/admin/user/feedback'));

		})->bind('/admin/user/feedback/save');

		$this->controller->get('/teachers', function() {
			$this->setTemplate('partials/admin/menu.twig');
			return $this->render();

		})->bind('/admin/teachers');

		$this->controller->get('/user/teachers/page/{page}', function($page = 1) {

			$paginator = $this->em->getRepository('\Domain\Entity\Test')->getAllPaginatedPosts($page);

			$this->setTemplate('templates/admin/user/test.twig');
			$this->viewAssigns([
				'tests' => $paginator,
				'maxPages' => ceil($paginator->count() / TestRepository::SHOW_ROWS_IN_LIST),
				'thisPage' => $page
			]);
			return $this->render();

		})->bind('/admin/teachers')->value('page', 1);

		$this->controller->get('/menu', function() {

			$counters = [
				'test' => $this->em->getRepository('Domain\Entity\Test')->getQuantityOfUncheckedRows(),
				'demo' => $this->em->getRepository('Domain\Entity\Demo')->getQuantityOfUncheckedRows(),
				'feedback' => $this->em->getRepository('Domain\Entity\Feedback')->getQuantityOfUncheckedRows(),
			];

			$this->setTemplate('partials/admin/menu.twig');
			$this->viewAssigns(compact('counters'));
			return $this->render();

		})->bind('/admin/menu');


		$this->controller->get('/subscribers', function() {

			$subscribers = $this->em->getRepository('\Domain\Entity\Subscriber')->findAll();

			$this->setTemplate('templates/admin/subscribers.twig');
			$this->viewAssigns(compact('subscribers'));
			return $this->render();

		})->bind('/admin/subscribers')->value('page', 1);

		$this->controller->get('/events', function() {

//			$event = new Event();
//			$event->setTitle('Спикер клаб');
//			$event->setDescription('Приходи пообщаться на английском и хорошо провести время!');
//			$event->setPrice('50 грн');
//			$event->setDate(new \DateTime());
//			$event->setParticipantCount(7);
//			$event->setTeacher('Олександра');
//
//			$this->em->persist($event);
//			$this->em->flush();

			$events = $this->em->getRepository('\Domain\Entity\Event')->findAll();

			$this->setTemplate('templates/admin/event/list.twig');
			$this->viewAssigns(compact('events'));
			return $this->render();

		})->bind('/admin/events');

		$this->controller->get('/teachers', function() {

			$teachers = $this->em->getRepository('\Domain\Entity\Teacher')->findAll();

			$this->setTemplate('templates/admin/teacher/list.twig');
			$this->viewAssigns(compact('teachers'));
			return  $this->render();

		})->bind('/admin/teachers');

		$this->controller->get('/teachers/create', function() {

			$this->setTemplate('templates/admin/teacher/edit.twig');
			return  $this->render();

		})->bind('/admin/teacher/create');

		$this->controller->get('/teachers/{teacherId}', function($teacherId) {

			$teacher = $this->em->getRepository('\Domain\Entity\Teacher')->find($teacherId);

			if (!is_a($teacher, Teacher::class)) {
				return $this->app->redirect('/admin/teacher/create');
			}

			$this->setTemplate('templates/admin/teacher/edit.twig');
			$this->viewAssigns(compact('teacher'));
			return  $this->render();

		})->bind('/admin/teacher/edit');

		$this->controller->post('/teachers/add', function() {

			$relatedPath = '';

			$teacherData = $this->app['request']->request->get('teacher');

			if($_FILES['photo']['name']) {
				if(!$_FILES['photo']['error']) {
					$fileName = $teacherData['pageName'] . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
					$relatedPath =  '/web/client/images/teachers/' . $fileName;
					$absolutePath = realpath('./web/client/images/teachers/') . '/' . $fileName;
					move_uploaded_file($_FILES['photo']['tmp_name'], $absolutePath);
				}
			}

			/**
			 * @var Teacher $teacher
			 */
			if (!empty($teacherData['id'])) {
				$teacher = $this->em->getRepository('\Domain\Entity\Teacher')->find($teacherData['id']);

				if (!is_a($teacher, Teacher::class)) {
					$teacher = new Teacher();
				}

			} else {
				$teacher = new Teacher();
			}

			if (isset($teacherData['title'])) {
				$teacher->setTitle($teacherData['title']);
			}
			$teacher->setDescription(trim($teacherData['description']));
			$teacher->setSpecialization($teacherData['specialization']);
			$teacher->setStatus($teacherData['status']);
			$teacher->setPageName($teacherData['pageName']);
			$teacher->setPhoto($relatedPath);

			$user = $teacher->getUser();

			if (!is_a($user, User::class)) {
				$user = new User();
			}

			$user->setName($teacherData['user']['name']);
			$user->setEmail($teacherData['user']['email']);
			$user->setPhone($teacherData['user']['phone']);
			$user->setRole(User::ROLE_TEACHER);

			$teacher->setUser($user);

			$this->em->persist($teacher);
			$this->em->flush();

			$this->session->getFlashBag()->add('teacherChangeSuccessfully', true);
			$this->session->getFlashBag()->add('teacherName', $user->getName());

			return $this->app->redirect('/admin/teachers');


		})->bind('/admin/teacher/add');

		$this->controller->get('/feedback', function() {

			$userFeedback = $this->em->getRepository('\Domain\Entity\UserFeedback')->findAll();

			$this->setTemplate('templates/admin/userFeedback/list.twig');
			$this->viewAssigns(compact('userFeedback'));
			return  $this->render();

		})->bind('/admin/feedback');

		return $this->controller;
	}

}