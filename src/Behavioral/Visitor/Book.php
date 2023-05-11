<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

final class Book implements Visiable
{
    /** @return array<Chapter> */
    public function getChapters(): array
    {
        return [
            new Chapter(8),
            new Chapter(12),
            new Chapter(25),
            new Chapter(3),
        ];
    }

    public function accept(Visitor $visitor): int
    {
        return $visitor->visitBook($this);
    }
}
