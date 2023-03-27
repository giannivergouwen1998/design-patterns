<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\Memento\State;
use App\Behavioral\Memento\Ticket;
use PHPUnit\Framework\TestCase;

final class MementoTest extends TestCase
{
    /** @test */
    public function it_can_save_the_state_and_restore_it(): void
    {
        $ticket = new Ticket();

        $ticket->open();

        self::assertSame(State::OPENED, (string) $ticket->getState());

        $memento = $ticket->saveToMemento();

        $ticket->assign();

        self::assertSame(State::ASSIGNED, (string) $ticket->getState());

        $ticket->restoreFromMemento($memento);

        self::assertSame(State::OPENED, (string) $ticket->getState());
    }
}