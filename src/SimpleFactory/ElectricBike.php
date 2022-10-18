<?php

namespace App\SimpleFactory;

class ElectricBike implements BicycleInterface
{
    protected string $destination;
    protected int $distance;

    public function __construct(string $destination, int $distance)
    {
        $this->destination = $destination;
        $this->distance = $distance;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
