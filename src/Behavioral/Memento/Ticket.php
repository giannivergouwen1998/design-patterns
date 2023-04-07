<?php

declare(strict_types=1);

namespace App\Behavioral\Memento;

final class Ticket implements Memento
{
    public function __construct(
        private State $state =  State::CREATED
    ) {
    }

    public function open(): void
    {
        $this->state = State::OPENED;
    }

    public function assign(): void
    {
        $this->state = State::ASSIGNED;
    }

    public function close(): void
    {
        $this->state = State::CLOSED;
    }

    public function saveToMemento(): ConcreteMemento
    {
        return new ConcreteMemento($this->state);
    }

    public function restoreFromMemento(ConcreteMemento $memento): void
    {
        $this->state = $memento->getState();
    }

    public function getState(): State
    {
        return $this->state;
    }
}
