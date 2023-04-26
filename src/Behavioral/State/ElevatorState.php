<?php

declare(strict_types=1);

namespace App\Behavioral\State;

abstract class ElevatorState
{
    public function __construct(
        protected Elevator $elevator
    ) {
    }

    abstract public function open(): void;

    abstract public function closed(): void;

    abstract public function move(): void;

    abstract public function stop(): void;

    abstract public function getStatus(): string;

    protected function changeState(ElevatorState $elevatorState): void
    {
        $this->elevator->changeState($elevatorState);
    }
}
