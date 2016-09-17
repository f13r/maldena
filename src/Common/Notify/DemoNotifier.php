<?php

namespace Common\Notify;

use Domain\Entity\Demo;

class DemoNotifier implements NotifyInterface {

	/**
	 * @param Demo $demo
	 * @return string
	 */
	public function render($demo) {
		if (!$this->validate($demo)) {
			return '';
		}

		return 'User ' . $demo->getUser()->getName() . ' want to try demo lesson. Date: ' . $demo->getCreatedAt()->format('g:ia \o\n l jS');
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