<?php

namespace App\Structural\Decorator;

final class BaseWebsite implements Website
{
    public function getPrice(): float
    {
        return 503.12;
    }

    public function getDescription(): string
    {
        return 'A basic website ';
    }
}
