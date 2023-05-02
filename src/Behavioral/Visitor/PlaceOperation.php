<?php

namespace App\Behavioral\Visitor;

interface PlaceOperation
{
    public function visitStore(Store $store): string;
    public function visitWork(Work $work): string;
    public function visitHouse(House $house): string;
}
