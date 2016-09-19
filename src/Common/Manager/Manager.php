<?php


namespace Common\Manager;

use Common\Logger\DBLogger;
use Doctrine\ORM\EntityManager;
use Common\Logger\LoggerInterface;

/**
 * Class Manager
 * @package Common
 */
class Manager {

	/**
	 * @var EntityManager $em
	 */
	protected $em;

	/**
	 * @var LoggerInterface
	 */
	protected $logger;


	/**
	 * Manager constructor.
	 * @param $em
	 */
	public function __construct() {
		$this->em = \Doctrine::getEntityManager();
		$this->logger = new DBLogger();
	}


	/**
	 * @param LoggerInterface|null $logger
	 */
	public function setLogger(LoggerInterface $logger = null) {
		if (!is_null($logger)) {
			$this->logger = $logger;
		}
	}

}