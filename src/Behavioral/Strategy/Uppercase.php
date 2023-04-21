<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy;

final class Uppercase implements WritingState
{
    public function write(string $words): string
    {
        return strtoupper($words);
    }
}
