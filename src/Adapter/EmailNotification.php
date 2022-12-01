<?php

namespace App\Adapter;

final class EmailNotification implements Notification
{
    public string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function send(string $title, string $message): int
    {
//        mail($this->email, $title, $message);
        return 200;
    }
}
