<?php

namespace Common\Manager;

interface ManagerInterface {

	public function addTask($type, $data);

	public function doJob();

}
