<?php

namespace App\Structural\Adapter;

final class SlackApi
{
    private string $login;
    public string $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn(): int
    {
        if ($this->login === "test@test.com") {
            return 200;
        }

        return 401;
    }

    public function sendMessage(string $chatId, string $message): void
    {
        // do nothing
    }
}
