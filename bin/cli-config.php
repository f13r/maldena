<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
$em = require __DIR__.'/../doctrine.php';

// replace with mechanism to retrieve EntityManager in your app
// $entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($em);