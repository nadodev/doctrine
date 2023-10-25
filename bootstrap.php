<?php
// bootstrap.php

require_once __DIR__ . '/vendor/autoload.php'; // Inclua o autoload do Composer

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationRegistry;

// Registrar um carregador de anotações alternativo (evita erro do SimpleAnnotationReader)


// Configuração do Doctrine
$paths = [__DIR__ . '/src/Entity'];
$isDevMode = true;
$useSimpleAnnotationReader = false;
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'doctrine',
];
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode,  null,
null,
false);
$entityManager = EntityManager::create($dbParams, $config);

return $entityManager;