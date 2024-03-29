<?php

namespace App\Structural\Proxy;

final class SimpleDownloader implements Downloader
{
    public function download(string $url): string|false
    {
        return file_get_contents($url);
    }
}
