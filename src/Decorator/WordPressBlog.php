<?php

namespace App\Decorator;

final class WordPressBlog extends WebsiteFeature
{
    public function getPrice(): float
    {
        return $this->website->getPrice() + 300;
    }

    public function getDescription(): string
    {
        return $this->website->getDescription() . 'and Wordpress blog ';
    }
}
