<?php

namespace App\AbstractFactory;

final class LightButtonFactory
{
    public function createLightButton(int $width, int $height, string $color): LightButton
    {
        return new LightButton($width, $height, $color);
    }
}
