<?php

namespace App\Bridge;

abstract class Service
{
    public function __construct(protected Formatter $formatter)
    {
    }

    final public function setImplementation(Formatter $printer): void
    {
        $this->formatter = $printer;
    }

    abstract public function get(): string;
}
