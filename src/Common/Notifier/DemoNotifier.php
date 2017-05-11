<?php

namespace Common\Notifier;

use Domain\Entity\Demo;
use Services\Utils;

/**
 * Class DemoNotifier
 * @package Common\Notifier
 */
class DemoNotifier implements NotifyInterface {


	/**
	 * @param Demo $demo
	 * @return string
	 */
	public function render($demo) {

		if (!$this->validate($demo)) {
			return '';
		}

		$template = \Twig::getTwig()->render('/partials/admin/tableRow.twig', [
			'name' => $demo->getUser()->getName(),
			'date' => $demo->getCreatedAt()->format(Utils::dateTimeFormat()),
			'type' => 'Demo',
			'text' => ''
		]);

		if ($template == '') {
			throw new \Exception('Template is empty!');
		}

		return $template;

	}

	/**
	 * @param Demo $demo
	 * @return bool
	 */
	private function validate($demo) {
		if (is_a($demo, Demo::class)) {
			return true;
		}

		return false;
	}
}