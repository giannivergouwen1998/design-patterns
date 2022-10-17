<?php

use App\FactoryMethod\CommunityExecutive as CommunityExecutiveAlias;
use App\FactoryMethod\Developer;
use App\FactoryMethod\DevelopmentManager as DevelopmentManagerAlias;
use App\FactoryMethod\MarketingManager as MarketingManagerAlias;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /** @test */
    public function it_can_create_a_developer(): void
    {
        self::assertInstanceOf(
            Developer::class,
            new Developer()
        );
    }

    /** @test */
    public function it_can_create_a_marketing_manager(): void
    {
        self::assertInstanceOf(
            MarketingManagerAlias::class,
            new MarketingManagerAlias()
        );
    }

    /** @test */
    public function it_can_create_a_community_executive(): void
    {
        self::assertInstanceOf(
            CommunityExecutiveAlias::class,
            new CommunityExecutiveAlias()
        );
    }

    /** @test */
    public function it_can_create_a_development_manager(): void
    {
        self::assertInstanceOf(
            DevelopmentManagerAlias::class,
            new DevelopmentManagerAlias()
        );
    }

    /** @test */
    public function it_can_take_interview(): void
    {
        $developmentManager = new DevelopmentManagerAlias();
        self::assertIsString($developmentManager->takeInterview());
    }

    /** @test */
    public function it_can_return_a_string(): void
    {
        $developmentManager = new DevelopmentManagerAlias();
        self::assertSame(
            'Asking about design patterns!',
            $developmentManager->takeInterview()
        );
    }
}
