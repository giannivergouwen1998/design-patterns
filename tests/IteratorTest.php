<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\Iterator\ComputerCollection;
use App\Behavioral\Iterator\ComputerIterator;
use PHPUnit\Framework\TestCase;

final class IteratorTest extends TestCase
{
    /** @test
     * @throws \Exception
     */
    public function it_can_iterate(): void
    {
        $collection = new ComputerCollection();

        $collection->setName('Apple');
        $collection->setName('Windows');
        $collection->setName('Linux');

        $computers = [];
        foreach ($collection->getIterator() as $item)
        {
            $computers[] =  $item;
        }

        self::assertSame(['Apple', 'Windows', 'Linux'], $computers);
    }
}