<?php

namespace App\Behavioral\Strategy;

interface WritingState
{
    public function write(string $words): string;
}
