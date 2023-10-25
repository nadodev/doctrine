<?php

namespace Src\Controller;
use Src\Core\Views;
use Src\Models\ProdutoModel;

class ProductController extends Views
{
    protected $entityManager;
    protected $produtoModel;

    public function __construct()
    {
        parent::__construct('/../views');
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

        echo $this->twig->render('show.twig', ['product' => $product]);
    }
}
