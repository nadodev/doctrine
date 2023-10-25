<?php
   /**
    * This file is the entry point of the Doctrine application.
    * It requires the autoload.php file, creates a Request object from the global variables,
    * creates a Kernel object, handles the request with the kernel, and sends the response.
    */

   require __DIR__ . '/vendor/autoload.php';

   use Framework\Http\Request;
   use Framework\Http\Kernel;

   define('BASE_PATH', dirname(__DIR__.'/doctrine/'));

   $request = Request::createFromGlobals();

   $kernel = new Kernel();

   $response = $kernel->handle($request);

   $response->send();

   


