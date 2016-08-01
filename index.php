<?php


use Controllers\AdminController;
use Controllers\IndexController;
date_default_timezone_set('Europe/Kiev');
$app = require __DIR__.'/bootstrap.php';

$app->mount('/', new IndexController());
$app->mount('/admin', new AdminController());
$app->run();
