<?php

declare(strict_types=1);

namespace App\Behavioral\Observer;

use SplObserver;

final class UserList implements \SplSubject
{
    public function __construct(
        private \SplObjectStorage $observers = new \SplObjectStorage(),
        public array $users = []
    )
    {
    }

    public function attach(SplObserver $observer): void
    {
       $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    public function addUser(string $user): void
    {
        $this->users[] = $user;
        $this->notify();
    }
}