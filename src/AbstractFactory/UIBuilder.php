<?php

namespace App\AbstractFactory;

class UIBuilder
{
    public function __construct(private ComponentFactory $factory)
    {
    }

    public function render(int $length, int $width, string $type): Button|SearchBar
    {
        $button = $this->factory->makeButton($length, $width);
        $searchBar = $this->factory->makeSearchBar($length, $width);

        if ($type === 'button') {
            return $button;
        } else {
            return $searchBar;
        }
    }
}
