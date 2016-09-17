<?php


namespace Common;

use Common\Sender\MailSubscribers;
use Doctrine\ORM\EntityManager;
use Domain\Entity\Queue;
use Common\Logger\DBLogger;
use Common\Sender\SenderInterface;
use Common\Notify\NotifyInterface;
use Common\Logger\LoggerInterface;
use Common\Sender\SubscriberInterface;
use Services\MailerSender;

/**
 * Class Manager
 * @package Common
 */
class Manager {

	/**
	 * @var EntityManager $em
	 */
	private $em;

	/**
	 * @var LoggerInterface
	 */
	private $logger;

	/**
	 * @var SenderInterface
	 */
	private $sender;

	/**
	 * @var SubscriberInterface
	 */
	private $subscriber;


	/**
	 * Manager constructor.
	 * @param $em
	 */
	public function __construct(EntityManager $em, LoggerInterface $logger = null, SenderInterface $sender = null, SubscriberInterface $subscriber = null) {
		$this->em = $em;

		$this->setDefaults();

		if (!is_null($logger)) {
			$this->logger = $logger;
		}

		if (!is_null($sender)) {
			$this->sender = $sender;
		}

		if (!is_null($subscriber)) {
			$this->subscriber = $subscriber;
		}
	}

	private function setDefaults() {
		$this->logger = new DBLogger($this->em);
		$this->sender = new MailerSender;
		$this->subscriber = new MailSubscribers($this->em);
	}

	/**
	 * @param $notifierClass
	 * @param $data
	 */
	public function addTask($notifierClass, $data) {
		$queue = new Queue();

		$queue->setNotifierClass($notifierClass);
		$queue->setData(serialize($data));

		$this->em->persist($queue);
		$this->em->flush();
	}

	/**
	 *
	 */
	public function doJob() {

		$tasks = $this->em->getRepository('Domain\Entity\Queue')->findBy(['deletedAt' => null]);

		/* @var Queue $task */
		foreach ($tasks as $task) {

			$notifierClass = $task->getNotifierClass();

			if (class_exists($notifierClass)) {

				try {
					$this->processTask(new $notifierClass, $this->sender, $this->subscriber, unserialize($task->getData()));
				} catch (\Exception $e) {
					$this->logger->log($e->getMessage());
				}

				$task->setDeletedAt(new \DateTime);
				$this->em->persist($task);
			}
		}

		$this->em->flush();
	}


	/**
	 * @param NotifyInterface $notifier
	 * @param SenderInterface $sender
	 * @param SubscriberInterface $subscriber
	 * @param $data
	 * @return bool
	 * @throws \Exception
	 */
	public function processTask(NotifyInterface $notifier, SenderInterface $sender, SubscriberInterface $subscriber, $data) {
		$template = $notifier->render($data);
		$subscribers = $subscriber->getSubscribers();

		if ($template == '') {
			throw new \Exception('Template is empty! Tried to call' . get_class($notifier) . ' class. Doesn\'t work!');
		}

		if (empty($subscribers)) {
			return true;
		}

		$sender->send($template, $subscribers);

	}
}