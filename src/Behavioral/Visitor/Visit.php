<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

final class Visit implements PlaceOperation
{
    public function visitStore(Store $store): string
    {
        return $store->storeVisited();
    }

    public function visitWork(Work $work): string
    {
        return $work->workVisited();
    }

    public function visitHouse(House $house): string
    {
        return $house->houseVisited();
    }
}
