<?php

namespace App\Creational\AbstractFactory;

interface ComponentFactoryInterface
{
    public function MakeDarkButton(int $width, int $height, string $color): DarkButtonInterface;
    public function MakeLightButton(int $width, int $height, string $color): LightButtonInterface;
}
