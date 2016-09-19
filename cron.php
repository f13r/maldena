<?php

use Common\Manager\NotifyManager;
use Common\Sender\MailSubscribers;
use Services\MailerSender;

require_once __DIR__.'/vendor/autoload.php';

date_default_timezone_set('Europe/Kiev');


class Twig {
	static function getTwig() {
		$loader = new  Twig_Loader_Filesystem(__DIR__ . '/views');
		return new Twig_Environment($loader);
	}
}

Class Doctrine {
	static function getEntityManager() {
		return require __DIR__.'/doctrine.php';
	}
}


$manager = new NotifyManager(new MailerSender, new MailSubscribers);
$manager->doJob();
