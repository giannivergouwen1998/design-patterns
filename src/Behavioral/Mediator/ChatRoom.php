<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator;

final class ChatRoom implements Chat
{
    public function showMessage(User $user, string $message): string
    {
        $sender = $user->name;

        return '['.$sender.']: '.$message;
    }
}
