<?php

namespace App\FW2;

final class Character implements Text
{
    public function __construct(private string $name)
    {
    }

    public function render(string $extrinsicState): string
    {
        return sprintf('Character %s with font %s', $this->name, $extrinsicState);
    }
}
