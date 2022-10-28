<?php

namespace App\AbstractFactory;

class ComponentFactory implements ComponentFactoryInterface
{
    public function MakeDarkButton(int $width, int $height, string $color): DarkButtonInterface
    {
        return new DarkButton($width, $height, $color);
    }

    public function MakeLightButton(int $width, int $height, string $color): LightButtonInterface
    {
        return new LightButton($width, $height, $color);
    }
}
