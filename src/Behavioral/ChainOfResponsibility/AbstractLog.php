<?php

namespace App\Behavioral\ChainOfResponsibility;

abstract class AbstractLog implements Handler
{
    private Handler $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handle(string $request): ?string
    {
        return $this->nextHandler->handle($request);
    }
}
