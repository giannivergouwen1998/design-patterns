<?php

namespace App\Creational\AbstractFactory;

final class UiBuilder
{
    public function __construct(private ComponentFactoryInterface $factory)
    {
    }

    public function render(int $width, int $height, string $color): DarkButtonInterface|LightButtonInterface
    {
        if ($color === 'dark') {
            return $this->factory->MakeDarkButton($width, $height, $color);
        } else {
            return $this->factory->MakeLightButton($width, $height, $color);
        }
    }
}
