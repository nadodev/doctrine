<?php
// bootstrap.php

require_once __DIR__ . '/vendor/autoload.php'; // Inclua o autoload do Composer

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Dotenv\Dotenv;


$paths = [__DIR__ . '/Framework/Entity'];

$isDevMode = true;

$useSimpleAnnotationReader = false;

$cache = null;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbParams = [
    'driver'   => $_ENV['DB_DRIVER'],
    'user'     => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
    'dbname'   => $_ENV['DB_NAME'],
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