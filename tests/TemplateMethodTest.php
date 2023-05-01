<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\TemplateMethod\AndroidBuilder;
use App\Behavioral\TemplateMethod\IosBuilder;
use PHPUnit\Framework\TestCase;

final class TemplateMethodTest extends TestCase
{
    /** @test */
    public function it_can_build_android(): void
    {
        $androidBuilder = new AndroidBuilder();

        self::assertSame('Running android tests & Linting the android code & Assembling the android build & Deploying android build to server', $androidBuilder->Build());
    }

    /** @test */
    public function it_can_build_ios(): void
    {
        $iosBuilder = new IosBuilder();

        self::assertSame('Running ios tests & Linting the ios code & Assembling the ios build & Deploying ios build to server', $iosBuilder->Build());
    }
}