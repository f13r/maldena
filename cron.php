<?php

use Common\Manager;

date_default_timezone_set('Europe/Kiev');
$em = require __DIR__.'/doctrine.php';

$manager = new Manager($em);
$manager->doJob();
