<?php

namespace Tests;

use App\Structural\Decorator\BaseWebsite;
use App\Structural\Decorator\CustomDesign;
use App\Structural\Decorator\YearHosting;
use PHPUnit\Framework\TestCase;

final class DecoratorTest extends TestCase
{
    public const MONEY = 2863.12;
    public const DESCRIPTION = 'A basic website with a custom design and year hosting ';
    /** @test */
    public function it_can_add_features(): void
    {
        $website = new BaseWebsite();

        $websiteWithCustomDesign = new CustomDesign($website);

        $websiteWithCustomDesignAndYearHosting = new YearHosting($websiteWithCustomDesign);


        self::assertIsFloat($websiteWithCustomDesignAndYearHosting->getPrice());
        self::assertSame(self::MONEY, $websiteWithCustomDesignAndYearHosting->getPrice());

        self::assertIsString($websiteWithCustomDesignAndYearHosting->getDescription());
        self::assertSame(self::DESCRIPTION, $websiteWithCustomDesignAndYearHosting->getDescription());

    }
}