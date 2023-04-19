<?php

declare(strict_types=1);

namespace App\Behavioral\Observer;

use ReturnTypeWillChange;
use SplSubject;

final class UserListLogger implements \SplObserver
{
    #[ReturnTypeWillChange] public function update(SplSubject $subject): string
    {
        return 'All observers has been updated';
    }
}
