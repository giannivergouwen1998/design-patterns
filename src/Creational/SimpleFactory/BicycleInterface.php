<?php

namespace App\Creational\SimpleFactory;

interface BicycleInterface
{
    public function getDestination(): string;
    public function getDistance(): int;
}
