<?php

declare(strict_types=1);

namespace Tests;


use App\Behavioral\Strategy\DefaultText;
use App\Behavioral\Strategy\Lowercase;
use App\Behavioral\Strategy\TextEditor;
use App\Behavioral\Strategy\Uppercase;
use PHPUnit\Framework\TestCase;

final class StrategyTest extends TestCase
{
    private const TEXT = 'Dit is een stukje tekst';

    /** @test */
    public function it_can_change_states(): void
    {
        $textEditor = new TextEditor(new Uppercase());

        self::assertSame('DIT IS EEN STUKJE TEKST', $textEditor->type(self::TEXT));

        $textEditor->setState(new Lowercase());

        self::assertSame('dit is een stukje tekst', $textEditor->type(self::TEXT));

        $textEditor->setState(new DefaultText());

        self::assertSame(self::TEXT, $textEditor->type(self::TEXT));
    }
}