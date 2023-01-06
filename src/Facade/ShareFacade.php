<?php

namespace App\Facade;

final class ShareFacade
{
    protected Twitter $twitter;
    protected Google $google;
    protected Reddit $reddit;

    public function __construct(Twitter $twitter, Google $google, Reddit $reddit)
    {
        $this->twitter = $twitter;
        $this->google = $google;
        $this->reddit = $reddit;
    }

    /** @return array<string> */
    public function share(string $url, string $title, string $message): array
    {
        return [
            'twitter' => $this->twitter->tweet($message, $url),
            'google' => $this->google->share($url),
            'reddit' => $this->reddit->reddit($url, $title),
        ];
    }
}
