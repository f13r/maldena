<?php


namespace Common\Manager;

use Common\Manager\ManagerInterface;
use Domain\Entity\Queue;
use Common\Sender\SenderInterface;
use Common\Notifier\NotifyInterface;
use Common\Sender\SubscriberInterface;

/**
 * Class Manager
 * @package Common
 */
class NotifyManager extends Manager implements ManagerInterface {

	/**
	 * @var SenderInterface
	 */
	private $sender;

	/**
	 * @var SubscriberInterface
	 */
	private $subscriber;


	public function __construct(SenderInterface $sender, SubscriberInterface $subscriber) {
		parent::__construct();

		$this->sender = $sender;
		$this->subscriber = $subscriber;
	}

	/**
	 * @param $task
	 * @param $data
	 */
	public function addTask($task, $data) {
		$queue = new Queue();

		$queue->setTask($task);
		$queue->setData(serialize($data));
		$queue->setType(Queue::NOTIFIER_TYPE);

		$this->em->persist($queue);
		$this->em->flush();
	}

	/**
	 *
	 */
	public function doJob() {

		$rows = '';

		$tasks = $this->em->getRepository('Domain\Entity\Queue')->findBy([
			'deletedAt' => null,
			'type' => Queue::NOTIFIER_TYPE
		]);

		$subscribers = $this->subscriber->getSubscribers();

		if (empty($subscribers) || empty($tasks)) {
			return true;
		}

		/* @var Queue $task */
		foreach ($tasks as $task) {

			$notifierClass = $task->getTask();

			if (class_exists($notifierClass)) {

				try {
					/* @var NotifyInterface $notifier */
					$rows .= (new $notifierClass)->render(unserialize($task->getData()));
				} catch (\Exception $e) {
					$this->logger->log($e->getMessage());
				}

				$task->setDeletedAt(new \DateTime);
				$this->em->persist($task);
			}
		}

		if ($rows == '') {
			return true;
		}


		$email = \Twig::getTwig()->render('/templates/admin/email.twig', [
			'rows' => $rows
		]);

		$this->sender->send($email, $subscribers);
		$this->em->flush();
	}

}