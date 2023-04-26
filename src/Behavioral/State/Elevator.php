<?php

declare(strict_types=1);

namespace App\Behavioral\State;

final class Elevator
{
    protected ElevatorState $state;

    public function __construct()
    {
        $this->state = new Stop($this);
    }

    public function changeState(ElevatorState $state): void
    {
        $this->state = $state;
    }

    public function open(): void
    {
        $this->state->open();
    }

    public function closed(): void
    {
        $this->state->closed();
    }

    public function stop(): void
    {
        $this->state->stop();
    }

    public function move(): void
    {
        $this->state->move();
    }

    public function getStatus(): string
    {
        return $this->state->getStatus();
    }
}
