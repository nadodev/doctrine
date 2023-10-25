<?php


namespace Framework\Controller;

use Framework\Http\Response;

class HomeController
{
    public static function index()  : Response
    {
      $content = '<h2>Oi tudo bem</h2>';

      return new Response($content);
    }

    public function show(int $id) : Response
    {
        $content = "<h2>Show $id</h2>";

        return new Response($content);
    }
}