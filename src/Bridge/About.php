<?php

namespace App\Bridge;

final class About implements Webpage
{
    protected Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return 'About page in '.$this->theme->getColor();
    }
}
