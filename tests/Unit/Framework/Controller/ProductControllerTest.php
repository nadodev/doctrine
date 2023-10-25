<?php

use Framework\Controller\ProductController;
use Framework\Models\ProdutoModel;
use Framework\Http\Response;

$entityManager = require __DIR__ . '/../../../../bootstrap.php';
$produtoModel = new ProdutoModel($entityManager);

test('should get all products', function () use ( $produtoModel) {

    $products = $produtoModel->getAllProdutos();

    expect($products)->toBeArray();
});

test('should show a product', function ()  use ($entityManager, $produtoModel) {

    $productController = new ProductController();

    $product = $productController->show(1);

    expect($product)->toBeInstanceOf(Response::class);
});