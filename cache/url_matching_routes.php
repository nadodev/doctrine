<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'foo_route', '_controller' => 'Src\\Controller\\ProductController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/foo/([0-9]+)(*:20)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        20 => [
            [['_route' => 'foo_placeholder_route', '_controller' => 'App\\Controller\\FooController::load'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
