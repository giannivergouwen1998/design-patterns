<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

final class Document implements Visiable
{
    public function __construct(
        private int $count
    ) {
    }

    public function getPageCount(): int
    {
        return $this->count;
    }

    public function accept(Visitor $visitor): int
    {
        return $visitor->visitDocument($this);
    }
}
