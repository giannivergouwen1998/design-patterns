<?php

namespace App\Structural\Bridge;

final class Home implements Webpage
{
    protected Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return 'Home page in '.$this->theme->getColor();
    }
}
