<?php

namespace Common\Sender;

interface SenderInterface {

	public function send($email, $subscribers);

}
