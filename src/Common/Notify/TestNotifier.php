<?php

namespace Common\Notify;

use Domain\Entity\Test;

class TestNotifier implements NotifyInterface {

	/**
	 * @param Test $demo
	 * @return string
	 */
	public function render($demo) {
		if (!$this->validate($demo)) {
			return '';
		}

		return 'User ' . $demo->getUser()->getName() . ' want to try demo lesson. Date: ' . $demo->getCreatedAt()->format('g:ia \o\n l jS');
	}

	/**
	 * @param Test $test
	 * @return bool
	 */
	private function validate($test) {
		if (is_a($test, Demo::class)) {
			return true;
		}

		return false;
	}
}