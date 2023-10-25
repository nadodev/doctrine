<?php

namespace Framework\Models;

use Doctrine\ORM\EntityManagerInterface;
use Framework\Entity\Produto;

class ProdutoModel
{
    protected EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function find(int $id): ?Produto
    {
        return $this->entityManager->getRepository(Produto::class)->find($id);
    }

    public function getAllProdutos(): array
    {
        return $this->entityManager->getRepository(Produto::class)->findAll();
    }

}
