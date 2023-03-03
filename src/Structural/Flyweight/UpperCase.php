<?php

namespace App\Structural\Flyweight;

final class UpperCase implements Layout
{
    public function render(string $character): string
    {
        return strtoupper($character);
    }
}
