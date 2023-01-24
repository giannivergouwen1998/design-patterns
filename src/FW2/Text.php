<?php

declare(strict_types=1);

namespace App\FW2;

interface Text
{
    public function render(string $extrinsicState): string;
}
