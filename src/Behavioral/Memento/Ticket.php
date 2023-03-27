<?php

declare(strict_types=1);

namespace App\Behavioral\Memento;

final class Ticket implements Memento
{
    public function __construct(
        private State $state =  new State(State::CREATED)
    ) {
    }

    public function open(): void
    {
        $this->state = new State(State::OPENED);
    }

    public function assign(): void
    {
        $this->state = new State(State::ASSIGNED);
    }

    public function close(): void
    {
        $this->state = new State(State::CLOSED);
    }

    public function saveToMemento(): ConcreteMemento
    {
        return new ConcreteMemento(clone $this->state);
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
