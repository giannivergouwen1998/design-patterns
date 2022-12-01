<?php

namespace Tests;

use App\Bridge\HtmlFormatter;
use App\Bridge\PingService;
use App\Bridge\PlainTextFormatter;
use App\Bridge\TextService;
use PHPUnit\Framework\TestCase;

final class BridgeTest extends TestCase
{
    /** @test */
    public function it_can_format_html(): void
    {
        $textService = new TextService(new HtmlFormatter());
        $pingService = new PingService(new HtmlFormatter());

        self::assertSame('<p>Text service</p>', $textService->get());
        self::assertSame('<p>Pong</p>', $pingService->get());
        self::assertIsString($textService->get());
        self::assertIsString($pingService->get());
    }

    /** @test */
    public function it_can_format_plain_text(): void
    {
        $textService = new TextService(new PlainTextFormatter());
        $pingService = new PingService(new PlainTextFormatter());

        self::assertSame('Text service', $textService->get());
        self::assertSame('Pong', $pingService->get());
        self::assertIsString($textService->get());
        self::assertIsString($pingService->get());
    }
}