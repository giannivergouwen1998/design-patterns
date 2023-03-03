<?php

namespace Tests;

use App\Structural\Facade\Google;
use App\Structural\Facade\Reddit;
use App\Structural\Facade\ShareFacade;
use App\Structural\Facade\Twitter;
use PHPUnit\Framework\TestCase;

final class FacadeTest extends TestCase
{
    public const TWITTER = 'Tweeted: Design patterns from: myblog.com';
    public const GOOGLE = 'Shared on Google: myblog.com';
    public const REDDIT = 'Posted on Reddit: myblog.com with title: blog';

    /** @test */
    public function it_can_share_a_blog(): void
    {
        $twitter = new Twitter();
        $google = new Google();
        $reddit = new Reddit();

        $facade = new ShareFacade($twitter,$google,$reddit);
        $facade->share('myblog.com','blog','Design patterns');

        $expected = [
            'twitter' => self::TWITTER,
            'google' => self::GOOGLE,
            'reddit' => self::REDDIT,
        ];

        self::assertSame($expected, $facade->share('myblog.com','blog','Design patterns'));
        self::assertIsArray($facade->share('myblog.com','blog','Design patterns'));
    }
}