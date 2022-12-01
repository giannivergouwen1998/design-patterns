<?php

namespace App\Bridge;

final class TextService extends Service
{
    public function get(): string
    {
        return $this->formatter->format('Text service');
    }
}
