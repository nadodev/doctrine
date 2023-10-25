<?php
// bootstrap.php

require_once __DIR__ . '/vendor/autoload.php'; // Inclua o autoload do Composer

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__ . '/Framework/Entity'];

$isDevMode = true;

$useSimpleAnnotationReader = false;

$cache = null;


$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'doctrine',
];

$config = Setup::createAnnotationMetadataConfiguration(
    $paths,
    $isDevMode,  
    null,
    $cache,
    $useSimpleAnnotationReader
);
$entityManager = EntityManager::create($dbParams, $config);

return $entityManager;