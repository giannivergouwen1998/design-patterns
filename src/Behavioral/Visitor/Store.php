<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

final class Store implements Place
{
    public function accept(PlaceOperation $place): string
    {
        return $place->visitStore($this);
    }

    public function storeVisited(): string
    {
        return 'store visited';
    }
}
