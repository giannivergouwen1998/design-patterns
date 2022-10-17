<?php

namespace App\AbstractFactory;

abstract class Button
{
    public function button(): string
    {
        return 'Button created';
    }
}