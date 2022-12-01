<?php

namespace App\Bridge;

interface Formatter
{
    public function format(string $text): string;
}
