<?php

namespace App\AbstractFactory;

interface ComponentFactory
{
    public function makeButton(int $length, int $width): Button;
    public function makeSearchBar(int $length, int $width): SearchBar;
}
