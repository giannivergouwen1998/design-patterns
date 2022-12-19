<?php

namespace App\Decorator;

final class CustomDesign extends WebsiteFeature
{
    public function getPrice(): float
    {
        return $this->website->getPrice() + 2000;
    }

    public function getDescription(): string
    {
        return $this->website->getDescription() . 'with a custom design ';
    }
}
