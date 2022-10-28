<?php

namespace App\AbstractFactory;

final class DarkButtonFactory
{
    public function createDarkButton(int $width, int $height, string $color): DarkButton
    {
        return new DarkButton($width, $height, $color);
    }
}
