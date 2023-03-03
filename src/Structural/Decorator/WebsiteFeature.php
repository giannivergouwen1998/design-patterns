<?php

namespace App\Structural\Decorator;

abstract class WebsiteFeature implements Website
{
    public function __construct(protected Website $website)
    {
        $this->website = $website;
    }

    abstract public function getPrice(): float;

    abstract public function getDescription(): string;
}
