<?php

namespace Tests;

use App\AbstractFactory\Button;
use App\AbstractFactory\ComponentFactory;
use App\AbstractFactory\LightThemeComponentFactory;
use App\AbstractFactory\SearchBar;
use App\AbstractFactory\UIBuilder;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    /** @test */
    public function it_can_render_a_button(): void
    {
        $factory = new LightThemeComponentFactory();
        $builder = new UIBuilder($factory);
        self::assertInstanceOf(Button::class, $builder->render(30,30, 'button'));
    }

    /** @test */
    public function it_can_render_a_searchbar(): void
    {
        $factory = new LightThemeComponentFactory();
        $builder = new UIBuilder($factory);
        self::assertInstanceOf(SearchBar::class, $builder->render(30,30, 'searchbar'));
    }

    /** @test */
    public function not_instance_of(): void
    {
        $factory = new LightThemeComponentFactory();
        $builder = new UIBuilder($factory);
        self::assertNotInstanceOf(Button::class, $builder->render(30,30, 'searchbar'));
        self::assertNotInstanceOf(SearchBar::class, $builder->render(30,30, 'button'));
    }

    /** @test */
    public function is_int(): void
    {
        $button = new Button(30, 30);
        self::assertIsInt($button->getLength());
        self::assertIsInt($button->getWidth());
    }
}