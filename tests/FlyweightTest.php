<?php

namespace Tests;

use App\Flyweight\CharacterFactory;
use App\Flyweight\Context;
use App\Flyweight\Layout;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

final class FlyweightTest extends TestCase
{
    /** @test */
    public function it_can_initialize_the_same_object(): void
    {
        $characterFactory = new CharacterFactory();

        $character1 = $characterFactory->createCharacters('a');
        $character2 = $characterFactory->createCharacters('a');

        self::assertSame($character1, $character2);
    }

    /** @test */
    public function it_can_create_a_new_character_class(): void
    {
        $characterFactory = new CharacterFactory();

        $character1 = $characterFactory->createCharacters('a');
        $character2 = $characterFactory->createCharacters('b');

        self::assertNotSame($character1, $character2);
    }
}