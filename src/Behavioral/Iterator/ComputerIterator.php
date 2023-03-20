<?php

declare(strict_types=1);

namespace App\Behavioral\Iterator;

/** @implements \Iterator<int, string> */
final class ComputerIterator implements \Iterator
{
    public function __construct(
        public ComputerCollection $computers,
        private int $position = 0,
        public bool $reverse = false
    ) {
    }

    public function current(): ?string
    {
        return $this->computers->getName($this->position);
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return !is_null($this->computers->getName($this->position));
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
