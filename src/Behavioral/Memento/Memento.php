<?php

namespace App\Behavioral\Memento;

interface Memento
{
    public function getState(): State;
}
