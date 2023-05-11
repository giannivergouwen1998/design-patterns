<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy;

final class Lowercase implements Writingstrategy
{
    public function write(string $words): string
    {
        return strtolower($words);
    }
}
