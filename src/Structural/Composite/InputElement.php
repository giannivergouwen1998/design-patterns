<?php

namespace App\Structural\Composite;

final class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text"/>';
    }
}
