<?php

declare(strict_types=1);

namespace App\Behavioral\Interpreter;

final class Context
{
    /** @var array<string, boolean> */
    private array $variables;

    /**
     * @throws \Exception
     */
    public function lookUp(string $name): bool
    {
        if (!key_exists($name, $this->variables)) {
            throw new \Exception("Key not found");
        }

        return $this->variables[$name];
    }

    public function assign(VariableExpression $variable, bool $val): void
    {
        $this->variables[$variable->getName()] = $val;
    }
}
