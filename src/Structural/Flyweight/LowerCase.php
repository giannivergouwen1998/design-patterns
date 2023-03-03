<?php

namespace App\Structural\Flyweight;

final class LowerCase implements Layout
{
    public function render(string $character): string
    {
        return strtolower($character);
    }
}
