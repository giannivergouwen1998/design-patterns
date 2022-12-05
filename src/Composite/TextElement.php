<?php

namespace App\Composite;

final class TextElement implements Renderable
{
    public function __construct(public readonly string $text)
    {
    }

    public function render(): string
    {
        return $this->text;
    }
}
