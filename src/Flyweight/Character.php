<?php

declare(strict_types=1);

namespace App\Flyweight;

final class Character
{
    public function __construct(private string $char)
    {
    }

    public function render(Context $context): string
    {
        return $context->layout()->render($this->char);
    }
}
