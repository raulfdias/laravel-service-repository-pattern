<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface
{
    public function getAllProducts();
    public function getProductById(int $id);
    public function createProduct(array $product);
    public function updateProduct(int $int, array $product);
    public function destroyProduct(int $int);

}
