<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy;

final class TextEditor
{
    public function __construct(
        protected Writingstrategy $strategy
    ) {
    }

    public function setStrategy(Writingstrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function type(string $words): string
    {
        return $this->strategy->write($words);
    }
}
