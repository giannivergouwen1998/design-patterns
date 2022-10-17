<?php

namespace App\AbstractFactory;

class LightThemeFactory extends ThemeFactory
{
    function makeButton(): LightButton
    {
        return new LightButton();
    }
}