<?php

use Framework\Controller\ProductController;
use Framework\Models\ProdutoModel;
use Framework\Http\Response;

$entityManager = require __DIR__ . '/../../../../bootstrap.php';

test('should get all products', function () use ($entityManager) {
    $produtoModel = new ProdutoModel($entityManager);
    $productController = new ProductController($entityManager, $produtoModel);

    $products = $produtoModel->getAllProdutos();

    expect($products)->toBeArray();
});

test('should show a product', function ()  use ($entityManager) {
    $produtoModel = new ProdutoModel($entityManager);
    $productController = new ProductController($entityManager, $produtoModel);

    $product = $productController->show(1);

    expect($product)->toBeInstanceOf(Response::class);
});