<?php

namespace App\Flyweight;

final class UpperCase implements Layout
{
    public function render(string $character): string
    {
        return strtoupper($character);
    }
}
