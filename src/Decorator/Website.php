<?php

namespace App\Decorator;

interface Website
{
    public function getPrice(): float;
    public function getDescription(): string;
}
