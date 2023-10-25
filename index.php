<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RouteCollection;

$context = new RequestContext();
$context->fromRequest(Request::createFromGlobals());

$routes = new RouteCollection();

require __DIR__ . '/routes.php';

$matcher = new UrlMatcher($routes, $context);

$parameters = $matcher->match($context->getPathInfo());

$controller = $parameters['_controller'];
list($controllerClass, $controllerAction) = explode('::', $controller);

$controllerInstance = new $controllerClass();

$id = isset($parameters['id']) ? $parameters['id'] : null;

$controllerInstance->$controllerAction($id);