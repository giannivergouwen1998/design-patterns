<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy;

final class TextEditor
{
    public function __construct(
        protected WritingState $state
    ) {
    }

    public function setState(WritingState $state): void
    {
        $this->state = $state;
    }

    public function type(string $words): string
    {
        return $this->state->write($words);
    }
}
