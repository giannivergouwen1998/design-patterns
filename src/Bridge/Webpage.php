<?php

namespace App\Bridge;

interface Webpage
{
    public function __construct(Theme $theme);

    public function getContent(): string;
}
