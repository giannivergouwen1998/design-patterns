<?php

namespace App\Behavioral\Mediator;

interface Chat
{
    public function showMessage(User $user, string $message): string;
}
