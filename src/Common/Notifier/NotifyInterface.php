<?php

namespace Common\Notifier;

interface NotifyInterface {

	const FORMAT = 'F j, g:i a';

	public function render($data);

}
