<?php

namespace App\Adapter;

final class SlackNotification implements Notification
{
    public SlackApi $slack;
    public string $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message): int
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $login = $this->slack->logIn();

        if ($login === 401) {
            return 401;
        }

        $this->slack->sendMessage($this->chatId, $slackMessage);
        return 200;
    }
}
