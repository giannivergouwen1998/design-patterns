<?php

namespace App\SimpleFactory;

interface BicycleInterface
{
    public function getDestination(): string;
    public function getDistance(): int;
}
