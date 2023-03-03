<?php

namespace App\Behavioral\ChainOfResponsibility;

final class InformationLogHandler extends AbstractLog
{
    public function handle(string $request): ?string
    {
        if ($request == LogType::INFORMATION->value) {
            return "Information log";
        } else {
            return parent::handle($request);
        }
    }
}
