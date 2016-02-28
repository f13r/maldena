<?php

use Controllers\AdminController;
use Controllers\IndexController;

$app = require __DIR__.'/bootstrap.php';
$app->mount('/', new IndexController());
$app->mount('/admin', new AdminController());
$app->run();
