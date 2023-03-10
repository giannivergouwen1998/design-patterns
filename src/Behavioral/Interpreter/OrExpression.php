<?php

declare(strict_types=1);

namespace App\Behavioral\Interpreter;

final class OrExpression implements Expression
{
    public function __construct(
        private Expression $first,
        private Expression $second,
    )
    {
    }

    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}