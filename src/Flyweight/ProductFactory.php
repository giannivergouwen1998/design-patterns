<?php

namespace App\Flyweight;

final class ProductFactory
{
    /** @var array<Product> */
    protected array $productList = [];

    public function getProduct(string $name): Product
    {
        if (isset($this->productList[$name])) {
            return $this->productList[$name];
        } else {
            $this->productList[] = new Product($name);
            return $this->productList[$name];
        }
    }
}
