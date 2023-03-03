<?php

namespace App\Structural\Decorator;

interface Website
{
    public function getPrice(): float;
    public function getDescription(): string;
}
