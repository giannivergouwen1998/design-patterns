<?php

namespace App\Decorator;

final class YearHosting extends WebsiteFeature
{
    public function getPrice(): float
    {
        return $this->website->getPrice() + (12 * 30);
    }

    public function getDescription(): string
    {
        return $this->website->getDescription() . 'and year hosting ';
    }
}
