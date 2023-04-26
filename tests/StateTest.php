<?php

declare(strict_types=1);

namespace Tests;

use _PHPStan_acbb55bae\Nette\Neon\Exception;
use App\Behavioral\State\Elevator;
use App\Behavioral\State\Open;
use PHPUnit\Framework\TestCase;

final class StateTest extends TestCase
{
    private Elevator $elevator;

    protected function setUp(): void
    {
        $this->elevator = new Elevator();
    }

    /** @test */
    public function it_cant_move_when_doors_are_open(): void
    {
        $this->elevator->open();

        self::assertSame('Elevator doors are open', $this->elevator->getStatus());

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Cannot move the elevator please close the doors first');

        $this->elevator->move();
    }

    /** @test */
    public function it_can_close_a_door(): void
    {
        $this->elevator->open();

        self::assertSame('Elevator doors are open', $this->elevator->getStatus());

        $this->elevator->closed();

        self::assertSame('Elevator doors are closed', $this->elevator->getStatus());
    }
}