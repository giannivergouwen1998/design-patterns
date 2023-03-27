<?php

declare(strict_types=1);

namespace App\Behavioral\Iterator;

use Traversable;

/** @implements \IteratorAggregate<int, string> */
final class ComputerCollection implements \IteratorAggregate
{
    /** @var array<string> */
    private array $names;

    public function getIterator(): Traversable
    {
        return new ComputerIterator($this);
    }

    public function addName(string $string): void
    {
        $this->names[] = $string;
    }

    public function getName(int $key): ?string
    {
        if (isset($this->names[$key])) {
            return $this->names[$key];
        }

        return null;
    }
}
