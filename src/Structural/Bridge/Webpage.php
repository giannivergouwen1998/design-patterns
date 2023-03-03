<?php

namespace App\Structural\Bridge;

interface Webpage
{
    public function __construct(Theme $theme);

    public function getContent(): string;
}
