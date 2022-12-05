<?php

namespace App\Bridge;

final class DarkTheme implements Theme
{
    public function getColor(): string
    {
        return 'dark theme';
    }
}
