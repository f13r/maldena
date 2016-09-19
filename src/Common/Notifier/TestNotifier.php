<?php

namespace Common\Notifier;

use Domain\Entity\Test;

class TestNotifier implements NotifyInterface {

	/**
	 * @param Test $test
	 * @return string
	 */
	public function render($test) {
		if (!$this->validate($test)) {
			return '';
		}

		$template = \Twig::getTwig()->render('/partials/admin/tableRow.twig', [
			'name' => $test->getUser()->getName(),
			'date' => $test->getCreatedAt()->format(self::FORMAT),
			'type' => 'Test',
			'text' => $test->getGoals()
		]);

		if ($template == '') {
			throw new \Exception('Template is empty!');
		}

		return $template;
	}

	/**
	 * @param Test $test
	 * @return bool
	 */
	private function validate($test) {
		if (is_a($test, Test::class)) {
			return true;
		}

		return false;
	}
}