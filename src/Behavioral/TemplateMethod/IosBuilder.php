<?php

declare(strict_types=1);

namespace App\Behavioral\TemplateMethod;

final class IosBuilder extends Builder
{
    public function test(): string
    {
        return 'Running ios tests';
    }

    public function lint(): string
    {
        return 'Linting the ios code';
    }

    public function assemble(): string
    {
        return 'Assembling the ios build';
    }

    public function deploy(): string
    {
        return 'Deploying ios build to server';
    }
}
