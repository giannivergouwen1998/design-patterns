<?php

namespace App\Structural\Bridge;

final class Contact implements Webpage
{
    protected Theme $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return 'Contact page in '.$this->theme->getColor();
    }
}
