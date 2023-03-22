<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\Mediator\ChatRoom;
use App\Behavioral\Mediator\User;
use PHPUnit\Framework\TestCase;

final class MediatorTest extends TestCase
{
    /** @test */
    public function it_mediates(): void
    {
        $mediator = new ChatRoom();

        $john = new User('John', $mediator);

        self::assertSame('[John]: hallo', $john->send('hallo'));
    }
}