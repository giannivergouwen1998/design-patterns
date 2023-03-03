<?php

namespace App\Creational\AbstractFactory;

interface LightButtonInterface
{
    public function getWidth(): int;
    public function getHeight(): int;
    public function getColor(): string;
}
