<?php

namespace App\Creational\AbstractFactory;

class LightButton implements LightButtonInterface
{
    public int $width;
    public int $height;
    public string $color;

    public function __construct(int $width, int $height, string $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
