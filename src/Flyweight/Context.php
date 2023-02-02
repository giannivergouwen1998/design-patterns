<?php

namespace App\Flyweight;

final class Context
{
    private array $layouts = [];

    private int $current = 0;

    public function setLayout(Layout $layout, int $position): void
    {
        $this->layouts[$position] = $layout;
    }

    public function layout(): Layout
    {
        return $this->layouts[$this->current];
    }

    public function current(): int
    {
        return $this->current;
    }

    public function next(): void
    {
        $this->current++;
    }
}