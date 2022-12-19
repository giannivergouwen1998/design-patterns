<?php

namespace Tests;

use App\Decorator\BaseWebsite;
use App\Decorator\CustomDesign;
use App\Decorator\YearHosting;
use PHPUnit\Framework\TestCase;

final class DecoratorTest extends TestCase
{
    /** @test */
    public function it_can_add_features(): void
    {
        $website = new BaseWebsite();

        $websiteWithCustomDesign = new CustomDesign($website);

        $websiteWithCustomDesignAndYearHosting = new YearHosting($websiteWithCustomDesign);


        self::assertIsFloat($websiteWithCustomDesignAndYearHosting->getPrice());
        self::assertSame(2863.12, $websiteWithCustomDesignAndYearHosting->getPrice());

        self::assertIsString($websiteWithCustomDesignAndYearHosting->getDescription());
        self::assertSame('A basic website with a custom design and year hosting ', $websiteWithCustomDesignAndYearHosting->getDescription());

    }
}