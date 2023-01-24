<?php

namespace App\Flyweight;

final class Product
{
    public function __construct(public readonly string $name)
    {
    }
}
