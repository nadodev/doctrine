<?php

declare(strict_types=1);

namespace Framework\Http;

use Framework\Http\Response;
use function FastRoute\simpleDispatcher;
use FastRoute\RouteCollector;

class Kernel
{
    public function handle(Request $request): Response
    {
        $dispatcher =  simpleDispatcher(function (RouteCollector $routeCollector) {
            $routes =  include BASE_PATH . '/routes/web.php';
            foreach ($routes as $route) {
                $routeCollector->addRoute(...$route);
            }
        });
        

        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(), 
            $request->getPathInfo(), 
        );


        [$status, [$controller, $method], $vars] = $routeInfo;

        $response = call_user_func_array([new $controller, $method], $vars);


        return $response;

    }

   


}