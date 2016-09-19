<?php

namespace Common\Notifier;

use Domain\Entity\Feedback;

class FeedbackNotifier implements NotifyInterface {

	/**
	 * @param Feedback $feedback
	 * @return string
	 */
	public function render($feedback) {
		if (!$this->validate($feedback)) {
			return '';
		}

		$template = \Twig::getTwig()->render('/partials/admin/tableRow.twig', [
			'name' => $feedback->getUser()->getName(),
			'date' => $feedback->getCreatedAt()->format(self::FORMAT),
			'type' => 'Feedback',
			'text' => $feedback->getText()
		]);


		if ($template == '') {
			throw new \Exception('Template is empty!');
		}

		return $template;
	}

	/**
	 * @param Feedback $feedback
	 * @return bool
	 */
	private function validate($feedback) {
		if (is_a($feedback, Feedback::class)) {
			return true;
		}

		return false;
	}
}