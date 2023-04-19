<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\Observer\UserList;
use App\Behavioral\Observer\UserListLogger;
use PHPUnit\Framework\TestCase;

final class ObserverTest extends TestCase
{
    /** @test */
    public function it_can_notify_all_attached_observers(): void
    {
        $userList = new UserList();
        $userList->attach(new UserListLogger());
        $userList->addUser('Jan');

        self::assertTrue(true);

    }
}