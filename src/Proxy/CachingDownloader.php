<?php

namespace App\Proxy;

final class CachingDownloader implements Downloader
{
    /** @var array<mixed> */
    private array $cache = [];

    public function __construct(readonly SimpleDownloader $downloader)
    {
    }

    public function download(string $url): string|false
    {
        if (!isset($this->cache[$url])) {
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            return 'Download from cache';
        }

        return $this->cache[$url];
    }
}
