<?php

namespace Common\Logger;

use Doctrine\ORM\EntityManager;
use Domain\Entity\Log;

/**
 * Class DBLogger
 * @package Common\Logger
 */
class DBLogger implements LoggerInterface {

	/**
	 * @var EntityManager $em
	 */
	private $em;

	/**
	 * DBLogger constructor.
	 * @param EntityManager $em
	 */
	public function __construct() {
		$this->em = \Doctrine::getEntityManager();
	}

	/**
	 * @param $message
	 */
	public function log($message) {

		$log = new Log();
		$log->setMessage($message);

		$this->em->persist($log);
		$this->em->flush();
	}
}