<?php

declare(strict_types=1);

namespace App\Behavioral\State;

use _PHPStan_acbb55bae\Symfony\Component\Console\Exception\LogicException;

final class Open extends ElevatorState
{
    public function open(): void
    {
        $this->elevator->changeState(new Open($this->elevator));
    }

    public function closed(): void
    {
        $this->elevator->changeState(new Closed($this->elevator));
    }

    public function move(): void
    {
        throw new LogicException('Cannot move the elevator please close the doors first');
    }

    public function stop(): void
    {
        throw new LogicException('Cannot stop the elevator when it is not moving');
    }

    public function getStatus(): string
    {
        return 'Elevator doors are open';
    }
}
