<?php

namespace Framework\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Views
{
    protected $twig;

    public function __construct(protected String $viewsPath)
    {
        $this->initTwig();
    }

    protected function initTwig()
    {
        $loader = new FilesystemLoader(__DIR__ . $this->viewsPath);
        $this->twig = new Environment( $loader, [
            'debug' => true,
            // ...
        ]);

        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
    }
}