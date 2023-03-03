<?php

namespace Tests;

use App\Structural\Bridge\About;
use App\Structural\Bridge\Contact;
use App\Structural\Bridge\DarkTheme;
use App\Structural\Bridge\Home;
use App\Structural\Bridge\LightTheme;
use PHPUnit\Framework\TestCase;

final class BridgeTest extends TestCase
{
    /** @test */
    public function it_can_render_dark_theme(): void
    {
        $homePage = new Home(new DarkTheme());
        $aboutPage = new About(new DarkTheme());
        $contactPage = new Contact(new DarkTheme());

        self::assertIsString($homePage->getContent());
        self::assertIsString($aboutPage->getContent());
        self::assertIsString($contactPage->getContent());

        self::assertSame('Home page in dark theme', $homePage->getContent());
        self::assertSame('About page in dark theme', $aboutPage->getContent());
        self::assertSame('Contact page in dark theme', $contactPage->getContent());
    }

    /** @test */
    public function it_can_render_light_theme(): void
    {
        $homePage = new Home(new LightTheme());
        $aboutPage = new About(new LightTheme());
        $contactPage = new Contact(new LightTheme());

        self::assertIsString($homePage->getContent());
        self::assertIsString($aboutPage->getContent());
        self::assertIsString($contactPage->getContent());

        self::assertSame('Home page in light theme', $homePage->getContent());
        self::assertSame('About page in light theme', $aboutPage->getContent());
        self::assertSame('Contact page in light theme', $contactPage->getContent());
    }
}