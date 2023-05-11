<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy;

final class Uppercase implements Writingstrategy
{
    public function write(string $words): string
    {
        return strtoupper($words);
    }
}
