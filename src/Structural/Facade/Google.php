<?php

namespace App\Structural\Facade;

final class Google
{
    public function share(string $url): string
    {
        return "Shared on Google: ".$url;
    }
}
