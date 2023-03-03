<?php

declare(strict_types=1);

namespace App\Command;

final class Calculator
{
    public function __construct(private float $num1, private float $num2)
    {
    }

    public function add(): float
    {
        return $this->num1 + $this->num2;
    }

    public function subtract(): float
    {
        return $this->num1 - $this->num2;
    }

    public function multiply(): float
    {
        return $this->num1 * $this->num2;
    }

    public function divide(): float
    {
        return $this->num1 / $this->num2;
    }

    public function setNum1(int $num1): void
    {
        $this->num1 = $num1;
    }

    public function setNum2(int $num2): void
    {
        $this->num2 = $num2;
    }
}
