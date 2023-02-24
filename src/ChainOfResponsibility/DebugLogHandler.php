<?php

namespace App\ChainOfResponsibility;

final class DebugLogHandler extends AbstractLog
{
    public function handle(string $request): ?string
    {
        if ($request == LogType::DEBUG->value) {
            return "Debug log";
        } else {
            return parent::handle($request);
        }
    }
}
