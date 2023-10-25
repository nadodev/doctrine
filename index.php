<?php
require __DIR__ . '/vendor/autoload.php';

use Framework\Http\Request;
use Framework\Http\Kernel;

define('BASE_PATH', dirname(__DIR__.'/doctrine/'));


// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Routing\RequestContext;
// use Symfony\Component\Routing\Matcher\UrlMatcher;
// use Symfony\Component\Routing\RouteCollection;

// $context = new RequestContext();
// $context->fromRequest(Request::createFromGlobals());

// $routes = new RouteCollection();

// require __DIR__ . '/routes.php';

// $matcher = new UrlMatcher($routes, $context);

// $parameters = $matcher->match($context->getPathInfo());

// $controller = $parameters['_controller'];
// list($controllerClass, $controllerAction) = explode('::', $controller);

// $controllerInstance = new $controllerClass();

// $id = isset($parameters['id']) ? $parameters['id'] : null;

// $controllerInstance->$controllerAction($id);

/**
 * Creates a new Request object from the global variables and initializes a new Kernel object.
 * Handles the request with the Kernel object and sends the response.
 *
 * @param none
 * @return void
 */
    $request = Request::createFromGlobals();

    $kernel = new Kernel();

    $response = $kernel->handle($request);

    $response->send();

   


