<?php

namespace Tests;

use App\Behavioral\ChainOfResponsibility\DebugLogHandler;
use App\Behavioral\ChainOfResponsibility\ErrorLogHandler;
use App\Behavioral\ChainOfResponsibility\InformationLogHandler;
use App\Behavioral\ChainOfResponsibility\LogType;
use PHPUnit\Framework\TestCase;

final class ChainOfResponsibilityTest extends TestCase
{
    /** @test */
    public function it_can_chain(): void
    {
        $errorLogHandler = new ErrorLogHandler();
        $errorLogHandler->setNext(new InformationLogHandler())->setNext(new DebugLogHandler());

//        self::assertSame('Information log', $this->clientCode($errorLogHandler));
        self::assertSame('Information log', $errorLogHandler->handle(LogType::INFORMATION->value));
        self::assertSame('Error log', $errorLogHandler->handle(LogType::ERROR->value));
        self::assertSame('Debug log', $errorLogHandler->handle(LogType::DEBUG->value));
    }
}