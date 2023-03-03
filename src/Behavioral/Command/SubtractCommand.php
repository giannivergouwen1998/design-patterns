<?php

declare(strict_types=1);

namespace App\Behavioral\Command;

final class SubtractCommand implements Command
{
    public function __construct(private Calculator $calculator)
    {
    }

    public function execute(): float
    {
        return $this->calculator->subtract();
    }
}
