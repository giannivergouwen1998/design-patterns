<?php

namespace App\Bridge;

final class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        return $text;
    }
}
