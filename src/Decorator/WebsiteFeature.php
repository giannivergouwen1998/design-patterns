<?php

namespace App\Decorator;

abstract class WebsiteFeature implements Website
{
    protected Website $website;
    public function __construct(Website $website)
    {
        $this->website = $website;
    }

    abstract public function getPrice(): float;

    abstract public function getDescription(): string;
}
