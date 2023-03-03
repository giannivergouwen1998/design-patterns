<?php

namespace Tests;

use App\Structural\Adapter\EmailNotification;
use App\Structural\Adapter\SlackApi;
use App\Structural\Adapter\SlackNotification;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

final class AdapterTest extends TestCase
{
    public const EMAIL = 'test@test.com';
    public const EMAIL_FALSE = 'test@test.nl';
    public const TITLE_EMAIL = 'E-mail';
    public const TITLE_SLACK = 'Slack';
    public const MESSAGE_EMAIL = 'Test bericht';
    public const MESSAGE_SLACK = 'Slack bericht';
    public const OK = 200;
    public const UNAUTHORIZED = 401;
    public const API_KEY = 'f9796821-3d8d-464b-be3b-42f116068775';
    public const CHAT_ID = '357e8a02-a3bb-4a07-b01b-77377994df0f';

    /** @test */
    public function it_can_send_a_message_email(): void
    {
        $email = new EmailNotification(self::EMAIL);

        assertSame(self::OK, $email->send(self::TITLE_EMAIL, self::MESSAGE_EMAIL));
    }

    /** @test */
    public function it_can_send_a_message_slack(): void
    {
        $slackApi = new SlackApi(self::EMAIL, self::API_KEY);
        $slack = new SlackNotification($slackApi, self::CHAT_ID);

        assertSame(200, $slack->send(self::TITLE_SLACK, self::MESSAGE_SLACK));
    }

    /** @test */
    public function it_cant_login(): void
    {
        $slackApi = new SlackApi(self::EMAIL_FALSE, self::API_KEY);
        $slack = new SlackNotification($slackApi, self::CHAT_ID);

        self::assertSame(401, $slack->send(self::TITLE_SLACK, self::MESSAGE_SLACK));
    }

    /** @test */
    public function it_cant_send_a_message_slack(): void
    {
        $slackApi = new SlackApi(self::EMAIL_FALSE, self::API_KEY);
        $slack = new SlackNotification($slackApi, self::CHAT_ID);

        self::assertNotSame(200, $slack->send(self::TITLE_SLACK, self::MESSAGE_SLACK));
    }
}