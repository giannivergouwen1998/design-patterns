<?php

namespace App\Flyweight;

interface Layout
{
    public function render(string $character): string;
}