<?php

namespace App\Facade;

final class Twitter
{
    public function tweet(string $message, string $url): string
    {
        return "Tweeted: ".$message.' from: '.$url;
    }
}
