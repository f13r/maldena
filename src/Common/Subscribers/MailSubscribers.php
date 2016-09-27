<?php

namespace Common\Sender;


use Doctrine\ORM\EntityManager;
use Domain\Entity\Subscriber;

class MailSubscribers implements SubscriberInterface {

	/**
	 * @var EntityManager $em
	 */
	private $em;


	/**
	 * MailSubscribers constructor
	 * @param $em
	 */
	public function __construct() {
		$this->em = \Doctrine::getEntityManager();
	}

	/**
	 * @return array
	 */
	public function getSubscribers() {

		$subscriberEmails = [];

		$subscribers = $this->em->getRepository('Domain\Entity\Subscriber')->findBy(['sendingStatus' => Subscriber::STATUS_SEND_EMAIL]);

		/* @var User $subscriber */
		foreach ($subscribers as $subscriber) {
			$subscriberEmails[] = $subscriber->getEmail();
		}

		return $subscriberEmails;
	}
}