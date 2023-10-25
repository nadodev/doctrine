<?php

namespace Framework\Controller;

use Framework\Core\Views;
use Framework\Models\ProdutoModel;

use Framework\Http\Response;


class ProductController extends Views
{
    protected $entityManager;
    protected $produtoModel;

    public function __construct()
    {
        parent::__construct('/../../resources/views');
        $this->entityManager = require __DIR__ . '/../../bootstrap.php';
        $this->produtoModel = new ProdutoModel($this->entityManager);
    }

    public function index()
    {
        $products = $this->produtoModel->getAllProdutos();
        echo $this->twig->render('index.twig', ['products' => $products]);
    }

    public function show($id)
    {
         $product = $this->produtoModel->find($id);

      $view =  $this->twig->render('show.twig', ['product' => $product]);

        return new Response($view);
    }
}
