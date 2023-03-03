<?php

declare(strict_types=1);

namespace App\Command;

final class CommandInvoker
{
    public function __construct(private Command $command)
    {
    }

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    public function handle(): float
    {
        return $this->command->execute();
    }
}
