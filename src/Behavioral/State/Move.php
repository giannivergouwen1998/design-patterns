<?php

declare(strict_types=1);

namespace App\Behavioral\State;

use _PHPStan_acbb55bae\Symfony\Component\Console\Exception\LogicException;

final class Move extends ElevatorState
{
    public function move(): void
    {
        $this->elevator->changeState(new Move($this->elevator));
    }

    public function open(): void
    {
        throw new LogicException('Cannot open the doors when the elevator is moving');
    }

    public function closed(): void
    {
        throw new LogicException('Doors are already closed');
    }

    public function stop(): void
    {
        $this->elevator->changeState(new Stop($this->elevator));
    }

    public function getStatus(): string
    {
        return 'Elevator is moving';
    }
}
