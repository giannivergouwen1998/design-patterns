<?php

namespace App\Structural\Facade;

final class Reddit
{
    public function reddit(string $url, string $title): string
    {
        return "Posted on Reddit: ".$url." with title: ".$title;
    }
}
