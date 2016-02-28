<?php
namespace Controllers;

use Silex\Application;

class AdminController extends AbstractController {

	protected function actionsHandler() {

		$this->controller->get('/', function() {
			return $this->app->redirect($this->app['url_generator']->generate('/admin/user/test'));
		});

		$this->controller->get('/user/test', function() {

			$tests = $this->em->getRepository('\Domain\Entity\Test')->findBy(array('deletedAt' => null));

			$this->setTemplate('templates/admin/user/test.twig');
			$this->viewAssigns(['tests' => $tests]);
			return $this->render();

		})->bind('/admin/user/test');

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
			 * @var Domain\Entity\Test $test
			 */
			$test = $this->em->getRepository('Domain\Entity\Test')
				->findOneBy(array('id' => (int) $answerId));
			$test->setComment($comment);
			$test->setLevel($level);

			if ($level == 0) {
				$test->setStatus(0);
			} else {
				$test->setStatus(1);
			}

			$this->em->persist($test);
			$this->em->flush();

			$this->session->getFlashBag->add('testListChangeSuccessful', true);

			return $this->app->redirect($this->app['url_generator']->generate('/admin/user/test'));

		})->bind('/admin/user/test/save');

		$this->controller->get('/user/demo', function() {

			$demos = $this->em->getRepository('\Domain\Entity\Demo')->findBy(array('deletedAt' => null));

			$change = false;
			if ($this->session->has('/user/demo/change')) {
				$change = true;
				$this->session->remove('/user/demo/change');
			}

			$this->setTemplate('templates/admin/user/demo.twig');
			$this->viewAssigns(['demos' => $demos, 'change' => $change]);
			return $this->render();

		})->bind('/admin/user/demo');

		$this->controller->get('/user/demo/{demoId}', function($demoId) {

			$demo = $this->em->getRepository('Domain\Entity\Demo')
				->findOneBy(array('id' => (int) $demoId));

			$this->setTemplate('templates/admin/user/demoResult.twig');
			$this->viewAssigns(['demos' => $demo]);
			return $this->render();

		})->bind('/admin/user/demo/result');

		$this->controller->post('/user/demo/save', function() {

			$status = $this->app['request']->request->get('status');
			$demoId = $this->app['request']->request->get('demoId');
			$comment = $this->app['request']->request->get('comment');

			/**
			 * @var Domain\Entity\Demo $demoObj
			 */
			$demo = $this->em->getRepository('Domain\Entity\Demo')
				->findOneBy(array('id' => (int) $demoId));

			$demo->setStatus($status);
			$demo->setComment($comment);

			$this->em->persist($demo);
			$this->em->flush();

			$app['session']->set('/user/demo/change', 1);

			return $this->app->redirect($this->app['url_generator']->generate('/admin/user/demo'));

		})->bind('/admin/user/demo/save');

		return $this->controller;
	}

}