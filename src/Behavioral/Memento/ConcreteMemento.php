<?php

declare(strict_types=1);

namespace App\Behavioral\Memento;

final class ConcreteMemento implements Memento
{
    public function __construct(
        private State $state
    ) {
    }

    public function getState(): State
    {
        return $this->state;
    }
}
