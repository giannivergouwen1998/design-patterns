<?php

namespace App\Flyweight;

final class Apple
{
    private Product $product;

    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
}
