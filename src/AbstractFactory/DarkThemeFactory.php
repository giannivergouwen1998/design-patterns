<?php

namespace App\AbstractFactory;

class DarkThemeFactory extends ThemeFactory
{
    function makeButton(): DarkButton
    {
        return new DarkButton();
    }
}