<?php

namespace App\Behavioral\Strategy;

interface Writingstrategy
{
    public function write(string $words): string;
}
