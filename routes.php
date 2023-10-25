<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('index', new Route('/', [
    '_controller' => 'Src\Controller\ProductController::index',
]));

$routes->add('show_product', new Route('/show/{id}', [
    '_controller' => 'Src\Controller\ProductController::show',
], [
    'id' => '\d+',
]));


$routes->add('fallback', new Route(
    '/{catchall}',
    [
        '_controller' => 'Src\Controller\ErrorController::notFound',
    ],
));

return $routes;
