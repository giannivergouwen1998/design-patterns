<?php

namespace App\Behavioral\Interpreter;

interface Expression
{
    public function interpret(Context $context): bool;
}
