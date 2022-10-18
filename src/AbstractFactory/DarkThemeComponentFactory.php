<?php

namespace App\AbstractFactory;

class DarkThemeComponentFactory implements ComponentFactory
{
    public function makeButton(int $length, int $width): Button
    {
        return new Button($length, $width);
    }

    public function makeSearchBar(int $length, int $width): SearchBar
    {
        return new SearchBar($length, $width);
    }
}
