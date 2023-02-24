<?php

namespace Tests;

use App\Proxy\CachingDownloader;
use App\Proxy\SimpleDownloader;
use PHPUnit\Framework\TestCase;
use function PHPStan\dumpType;

final class ProxyTest extends TestCase
{
    public const EXAMPLE_URL = "https://example.com/";
    public const URL = "https://google.nl/";


    /** @test */
    public function it_can_download(): void
    {
        $realSubject = new SimpleDownloader();

        $proxy = new CachingDownloader($realSubject);
        $result1 = $proxy->download(self::EXAMPLE_URL);
        $result2 = $proxy->download(self::URL);

        self::assertNotSame($result1, $result2);
    }

    /** @test */
    public function it_can_download_from_cache(): void
    {
        $realSubject = new SimpleDownloader();

        $proxy = new CachingDownloader($realSubject);
        $result1 = $proxy->download(self::EXAMPLE_URL);
        $result2 = $proxy->download(self::EXAMPLE_URL);


        self::assertNotSame($result1, $result2);


    }
}