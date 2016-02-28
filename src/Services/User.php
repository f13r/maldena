<?php

namespace Services;

use Domain\Entity\Demo;
use Domain\Entity\Test;
use Domain\Entity\User as UserModel;
use Silex\Application;

class User {

	/**
	 * @var Application $app
	 */
	protected $app;
	/**
	 * @var EntityManager $em
	 */
	protected $em;

	/**
	 * @var ApcuCache $cache
	 */
	protected $cache;

	public function __construct(Application $app) {
		$this->app = $app;
		$this->em = $app['em'];
		$this->cache = $app['cache'];
	}

	public function createUser(array $user) {

		$userObj = new UserModel();

		$userObj->setName($user['name']);

		if (isset($user['phone'])) {
			$userObj->setPhone($user['name']);
		}

		if (isset($user['email'])) {
			$userObj->setEmail($user['email']);
		}

		return $userObj;
	}

	public function createTest(array $test, UserModel $user) {
		
		$testObj = new Test();
		$testObj->setUser($user);
		$testObj->setAnswer(serialize($test['answer']));

		if (isset($test['goals'])) {
			$testObj->setGoals($test['goals']);
		}

		return $testObj;
	}

	public function createDemo(UserModel $user) {
		$demoObj = new Demo();
		$demoObj->setUser($user);

		return $demoObj;
	}

}