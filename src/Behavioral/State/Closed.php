<?php

declare(strict_types=1);

namespace App\Behavioral\State;

use _PHPStan_acbb55bae\Symfony\Component\Console\Exception\LogicException;

final class Closed extends ElevatorState
{
    public function closed(): void
    {
        $this->elevator->changeState(new Closed($this->elevator));
    }

    public function open(): void
    {
        $this->elevator->changeState(new Open($this->elevator));
    }

    public function move(): void
    {
        $this->elevator->changeState(new Move($this->elevator));
    }

    public function stop(): void
    {
        throw new LogicException('Cannot stop the elevator when it is not moving');
    }

    public function getStatus(): string
    {
        return 'Elevator doors are closed';
    }
}
