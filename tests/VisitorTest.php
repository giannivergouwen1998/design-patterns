<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\Visitor\House;
use App\Behavioral\Visitor\Store;
use App\Behavioral\Visitor\Visit;
use App\Behavioral\Visitor\Work;
use PHPUnit\Framework\TestCase;

final class VisitorTest extends TestCase
{
    /** @test */
    public function it_can_visit_a_house(): void
    {
        $house = new House();

        $visit = new Visit();

        self::assertSame('house visited', $house->accept($visit));
    }

    /** @test */
    public function it_can_visit_work(): void
    {
        $work = new Work();

        $visit = new Visit();

        self::assertSame('work visited', $work->accept($visit));
    }

    /** @test */
    public function it_can_visit_a_store(): void
    {
        $store = new Store();

        $visit = new Visit();

        self::assertSame('store visited', $store->accept($visit));
    }
}