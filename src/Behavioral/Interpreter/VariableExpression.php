<?php

declare(strict_types=1);

namespace App\Behavioral\Interpreter;

final class VariableExpression implements Expression
{
    public function __construct(
        public string $name
    )
    {
    }

    public function interpret(Context $context): bool
    {
       return $context->lookUp($this->name);
    }

    public function getName(): string
    {
        return $this->name;
    }
}