<?php

namespace App\Structural\Flyweight;

interface Layout
{
    public function render(string $character): string;
}
