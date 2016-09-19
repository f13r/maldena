<?php

namespace Common\Sender;


use Doctrine\ORM\EntityManager;

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

		$subscriberEmails = ['inna.rudova@gmail.com'];

		$subscribers = $this->em->getRepository('Domain\Entity\User')->findBy(['role' => 'admin']);

		/* @var User $subscriber */
		foreach ($subscribers as $subscriber) {
			$subscriberEmails[] = $subscriber->getEmail();
		}

		return $subscriberEmails;
	}
}