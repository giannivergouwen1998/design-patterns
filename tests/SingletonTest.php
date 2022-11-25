<?php

namespace Tests;

use Exception;
use App\Singleton\Database;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertSame;

final class SingletonTest extends TestCase
{
    /** @test */
    public function it_can_initialize(): void
    {
        $db = Database::connect();
        $db2 = Database::connect();

        assertInstanceOf(Database::class, $db);
        assertSame($db, $db2);
    }

    /** @test */
    public function it_cant_be_cloned(): void
    {
        $this->expectException(Exception::class);
        $db = Database::connect();
        $db2 = clone $db;
    }
}