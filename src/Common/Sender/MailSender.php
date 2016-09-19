<?php

namespace Services;


use Common\Sender\SenderInterface;

class MailerSender implements SenderInterface {

	/**
	 * @var \Swift_Mailer $mailer
	 */
	private $mailer;

	/**
	 * @var string
	 */
	private $from = 'fler.victor@gmail.com';

	/**
	 * @var string
	 */
	private $password = 'r[dugengv20014';

	/**
	 * @var string
	 */
	private $host = 'smtp.gmail.com';

	/**
	 * @var int
	 */
	private $port = 465;

	/**
	 * @var string
	 */
	private $authMode = 'login';

	/**
	 * @var string
	 */
	private $encryption = 'ssl';

	/**
	 * MailerSender constructor.
	 */
	public function __construct() {
		$this->mailer = $this->initSwiftMailer();
	}

	/**
	 * @param string $emailTemplate
	 * @param $subscribers
	 */
	public function send($emailTemplate, $subscribers) {

		$message = \Swift_Message::newInstance()
			->setSubject('Maldena has new user!')
			->setFrom($this->from)
			->setTo($subscribers)
			->setBody($emailTemplate, 'text/html');

		$this->mailer->send($message);
	}

	/**
	 * @return \Swift_Mailer
	 */
	private function initSwiftMailer() {

		$transport = \Swift_SmtpTransport::newInstance($this->host, $this->port)
			->setUsername($this->from)
			->setPassword($this->password)
			->setAuthMode($this->authMode)
			->setEncryption($this->encryption);

		return \Swift_Mailer::newInstance($transport);
	}
}