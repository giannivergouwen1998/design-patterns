<?php

namespace App\Creational\AbstractFactory;

interface DarkButtonInterface
{
    public function getWidth(): int;
    public function getHeight(): int;
    public function getColor(): string;
}
