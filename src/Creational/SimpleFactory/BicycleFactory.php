<?php

namespace App\Creational\SimpleFactory;

class BicycleFactory
{
    public static function createBicycle(string $destination, int $distance): Bicycle|ElectricBike
    {
        if ($distance <= 20) {
            return new Bicycle($destination, $distance);
        } else {
            return new ElectricBike($destination, $distance);
        }
    }
}
