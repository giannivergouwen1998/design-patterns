<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy;

final class TextEditor
{
    public function __construct(
        protected WritingState $strategy
    ) {
    }

    public function setStrategy(WritingState $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function type(string $words): string
    {
        return $this->strategy->write($words);
    }
}
