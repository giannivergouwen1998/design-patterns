<?php

namespace App\Structural\Bridge;

final class LightTheme implements Theme
{
    public function getColor(): string
    {
        return 'light theme';
    }
}
