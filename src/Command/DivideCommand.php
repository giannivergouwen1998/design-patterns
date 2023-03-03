<?php

declare(strict_types=1);

namespace App\Command;

final class DivideCommand implements Command
{
    public function __construct(private Calculator $calculator)
    {
    }

    public function execute(): float
    {
        return $this->calculator->divide();
    }
}
