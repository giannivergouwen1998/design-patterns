<?php

namespace Tests;

use App\FW2\TextFactory;
use PHPUnit\Framework\TestCase;

final class FlyweightTest extends TestCase
{
    /** @var array<string> */
    private array $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    /** @var array<string> */
    private array $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    /** @test */
    public function test_flyweight(): void
    {
        $factory = new TextFactory();

        for ($i = 0; $i <= 10; $i++) {
            foreach ($this->characters as $char) {
                foreach ($this->fonts as $font) {
                    $flyweight = $factory->get($char);

                    $rendered = $flyweight->render($font);

                    $this->assertSame(sprintf('Character %s with font %s', $char, $font), $rendered);
                }
            }
        }

        foreach ($this->fonts as $word) {
            $flyweight = $factory->get($word);

            $rendered = $flyweight->render('foobar');

            $this->assertSame(sprintf('Word %s with font foobar', $word), $rendered);
        }

        $this->assertCount(count($this->characters) + count($this->fonts), $factory);
    }
}