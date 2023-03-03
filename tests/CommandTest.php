<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\Command\AddCommand;
use App\Behavioral\Command\Calculator;
use App\Behavioral\Command\CommandInvoker;
use App\Behavioral\Command\DivideCommand;
use App\Behavioral\Command\MultiplyCommand;
use App\Behavioral\Command\SubtractCommand;
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{

    /** @test */
    public function it_can_add_numbers(): void
    {
        $calculator = new Calculator(5, 5);
        $invoker = new CommandInvoker(new AddCommand($calculator));

        self::assertSame(10.0, $invoker->handle());
    }

    /** @test */
    public function it_can_subtract_numbers(): void
    {
        $calculator = new Calculator(10, 2);
        $invoker = new CommandInvoker(new SubtractCommand($calculator));

        self::assertSame(8.0, $invoker->handle());
    }

    /** @test */
    public function it_can_multiply_numbers(): void
    {
        $calculator = new Calculator(20, 30);
        $invoker = new CommandInvoker(new MultiplyCommand($calculator));

        self::assertSame(600.0, $invoker->handle());
    }

    /** @test */
    public function it_can_divide_numbers(): void
    {
        $calculator = new Calculator(20324, 453);
        $invoker = new CommandInvoker(new DivideCommand($calculator));

        self::assertSame(44.86534216335541, $invoker->handle());
    }
}