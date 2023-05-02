<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

final class House implements Place
{
    public function accept(PlaceOperation $place): string
    {
        return $place->visitHouse($this);
    }

    public function houseVisited(): string
    {
        return 'house visited';
    }
}
