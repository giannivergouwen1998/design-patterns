<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator;

final class User
{
    public function __construct(
        public string $name,
        protected Chat $chat
    ) {
    }

    public function send(string $message): string
    {
        return $this->chat->showMessage($this, $message);
    }
}
