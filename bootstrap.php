<?php

date_default_timezone_set('UTC');
set_time_limit(0);
require_once __DIR__ . '/vendor/autoload.php';
use Doctrine\ORM\Tools\Setup;

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../src"), $isDevMode, null, null, false);
$conn = [
    'url' => 'mysql://root:root@localhost/orm-test',
];
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
