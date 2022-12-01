<?php

namespace App\Bridge;

final class PingService extends Service
{
    public function get(): string
    {
        return $this->formatter->format('Pong');
    }
}
