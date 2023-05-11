<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

final class Chapter
{
    public function __construct(
        public int $pages
    ) {
    }

    public function getPageCount(): int
    {
        return $this->pages;
    }
}
