<?php

namespace App\ChainOfResponsibility;

final class ErrorLogHandler extends AbstractLog
{
    public function handle(string $request): ?string
    {
        if ($request == LogType::ERROR->value) {
            return "Error log";
        } else {
            return parent::handle($request);
        }
    }
}
