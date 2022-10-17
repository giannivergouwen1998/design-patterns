<?php

namespace App\AbstractFactory;

abstract class ThemeFactory
{
   abstract function makeButton(): Button;
}