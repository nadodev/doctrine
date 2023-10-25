<?php

use Framework\Controller\HomeController;
use Framework\Controller\ProductController;



return [
    ['GET', '/', [HomeController::class, 'index']],
    ['GET', '/show/{id:\d+}', [ProductController::class, 'show']],
];