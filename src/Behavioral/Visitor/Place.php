<?php

namespace App\Behavioral\Visitor;

interface Place
{
    public function accept(PlaceOperation $place): string;
}
