<?php 
namespace Src\Controller;

use Src\Core\Views;

class ErrorController extends Views
{
    public function __construct()
    {
        parent::__construct('/../views');
        $this->entityManager = require __DIR__ . '/../../bootstrap.php';
    }

    public function notFound()
    {
        echo $this->twig->render('error404.twig');
    }
}