<?php
require __DIR__ . '/vendor/autoload.php';

use Framework\Http\Request;
use Framework\Http\Kernel;

define('BASE_PATH', dirname(__DIR__.'/doctrine/'));

    $request = Request::createFromGlobals();

    $kernel = new Kernel();

    $response = $kernel->handle($request);

    $response->send();

   


