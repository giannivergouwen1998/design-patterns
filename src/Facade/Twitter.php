<?php

namespace App\Facade;

final class Twitter
{
    public function tweet(string $status, string $url): string
    {
        return "Tweeted: ".$status.' from: '.$url;
    }
}
