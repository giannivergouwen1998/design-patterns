<?php

declare(strict_types=1);

namespace App\Behavioral\State;

use _PHPStan_acbb55bae\Symfony\Component\Console\Exception\LogicException;

final class Stop extends ElevatorState
{
    public function stop(): void
    {
        $this->elevator->changeState(new Stop($this->elevator));
    }

    public function open(): void
    {
        $this->elevator->changeState(new Open($this->elevator));
    }

    public function closed(): void
    {
        throw new LogicException('Wait till the doors are opened first');
    }

    public function move(): void
    {
        throw new LogicException('Wait till the doors are opened first');
    }

    public function getStatus(): string
    {
        return 'Elevator has stopped';
    }
}
