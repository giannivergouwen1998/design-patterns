<?php

namespace App\Structural\Facade;

final class ShareFacade
{
    public function __construct(protected Twitter $twitter, protected Google $google, protected Reddit $reddit)
    {
    }

    /** @return array<string, string> */
    public function share(string $url, string $title, string $message): array
    {
        return [
            'twitter' => $this->twitter->tweet($message, $url),
            'google' => $this->google->share($url),
            'reddit' => $this->reddit->reddit($url, $title),
        ];
    }
}
