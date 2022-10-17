<?php

namespace App\SimpleFactory;

class BicycleFactory
{
    public static function createBicycle(string $destination, int $distance): Bicycle|ElectricBike
    {
        if($distance <= 20)
        {
            return new Bicycle($destination, $distance);
        }
        else
        {
            return new ElectricBike($destination, $distance);
        }
    }

    //TODO abstract factory herschrijven naar dark/light theme
}
