<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

final class Work implements Place
{
    public function accept(PlaceOperation $place): string
    {
        return $place->visitWork($this);
    }

    public function workVisited(): string
    {
        return 'work visited';
    }
}
