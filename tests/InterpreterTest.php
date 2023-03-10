<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\Interpreter\AndExpression;
use App\Behavioral\Interpreter\Context;
use App\Behavioral\Interpreter\OrExpression;
use App\Behavioral\Interpreter\VariableExpression;
use PHPUnit\Framework\TestCase;

final class InterpreterTest extends TestCase
{
    private Context $context;
    private VariableExpression $a;
    private VariableExpression $b;
    private VariableExpression $c;

    protected function setUp(): void
    {
        $this->context = new Context();
        $this->a = new VariableExpression('A');
        $this->b = new VariableExpression('B');
        $this->c = new VariableExpression('C');
    }

    /** @test */
    public function it_can_execute_or_expression(): void
    {
        $this->context->assign($this->a, false);
        $this->context->assign($this->b, false);
        $this->context->assign($this->c, true);


        $expected = new OrExpression($this->a, $this->b);
        $result = $expected->interpret($this->context);

        self::assertFalse($result);

        $expected2 = new OrExpression($expected, $this->c);
        $result2 = $expected2->interpret($this->context);

        self::assertTrue($result2);
    }
    
    /** @test */
    public function it_can_execute_and_expression(): void
    {
        $this->context->assign($this->a, true);
        $this->context->assign($this->b, true);
        $this->context->assign($this->c, false);


        $expected = new AndExpression($this->a, $this->b);
        $result = $expected->interpret($this->context);

        self::assertTrue($result);

        $expected2 = new AndExpression($expected, $this->c);
        $result2 = $expected2->interpret($this->context);

        self::assertFalse($result2);
    }
}